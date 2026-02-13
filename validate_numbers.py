#!/usr/bin/env python3
"""Programmatically validate executive summary numbers against provided dumps."""

from __future__ import annotations

import ast
import datetime as _dt
import re
from dataclasses import dataclass
from pathlib import Path
from typing import Callable, Iterable, List, Optional

DUMP_DIR = Path(__file__).parent / "Dump20260209"
BIG_DUMP = DUMP_DIR / "Dump20250625.sql"
PROSERVICE_DUMP = DUMP_DIR / "ooas_dk_proservice.sql"
PROSERVICE_RAPPORT_DUMP = DUMP_DIR / "ooas_dk_proservice_rapport.sql"


def _split_tuples(values: str) -> List[str]:
    """Split a VALUES payload into individual tuple strings."""
    tuples: List[str] = []
    depth = 0
    in_str = False
    escaped = False
    start: Optional[int] = None

    for i, ch in enumerate(values):
        if escaped:
            escaped = False
            continue
        if ch == "\\":
            escaped = True
            continue
        if ch == "'":
            in_str = not in_str
            continue
        if in_str:
            continue
        if ch == "(":
            if depth == 0:
                start = i
            depth += 1
        elif ch == ")":
            depth -= 1
            if depth == 0 and start is not None:
                tuples.append(values[start : i + 1])
    return tuples


def _tuple_to_py(raw: str):
    """Convert a MySQL tuple string into a Python tuple."""
    return ast.literal_eval(raw.replace("NULL", "None"))


def _walk_inserts(path: Path, table: str, handler: Callable[[tuple], None]) -> None:
    """Stream insert statements for a table and apply handler to each tuple."""
    prefix = f"INSERT INTO `{table}`"
    with path.open(encoding="utf-8") as file:
        for line in file:
            if not line.startswith(prefix):
                continue
            values = line.split("VALUES", 1)[1].rstrip(" ;\n")
            for tup in _split_tuples(values):
                handler(_tuple_to_py(tup))


def _extract_auto_increment(path: Path, table: str) -> Optional[int]:
    pattern = re.compile(rf"CREATE TABLE `{table}` .*?AUTO_INCREMENT=(\d+)", re.S)
    text = path.read_text(encoding="utf-8")
    match = pattern.search(text)
    return int(match.group(1)) if match else None


@dataclass
class TimeSeriesStat:
    count: int = 0
    timestamps: List[float] | None = None

    def __post_init__(self):
        if self.timestamps is None:
            self.timestamps = []

    def record(self, ts: Optional[float]) -> None:
        if ts:
            self.timestamps.append(ts)
        self.count += 1

    @property
    def span_years(self) -> Optional[float]:
        if not self.timestamps:
            return None
        delta = max(self.timestamps) - min(self.timestamps)
        return delta / (60 * 60 * 24 * 365.25)

    @property
    def min_iso(self) -> Optional[str]:
        return _ts_to_iso(min(self.timestamps)) if self.timestamps else None

    @property
    def max_iso(self) -> Optional[str]:
        return _ts_to_iso(max(self.timestamps)) if self.timestamps else None


def _ts_to_iso(ts: float) -> str:
    return _dt.datetime.fromtimestamp(ts, _dt.timezone.utc).isoformat()


def collect_jobs_stats() -> dict:
    created_stat = TimeSeriesStat()
    closing_stat = TimeSeriesStat()
    job_count = 0

    def handle(job: tuple) -> None:
        nonlocal job_count
        job_count += 1
        created_stat.record(job[2])
        closing_stat.record(job[17])

    _walk_inserts(BIG_DUMP, "jobs", handle)
    return {
        "count": job_count,
        "created_min": created_stat.min_iso,
        "created_max": created_stat.max_iso,
        "created_span_years": created_stat.span_years,
        "closing_min": closing_stat.min_iso,
        "closing_max": closing_stat.max_iso,
    }


def collect_joblog_stats() -> dict:
    log_stat = TimeSeriesStat()
    job_ids = set()

    def handle(log: tuple) -> None:
        log_stat.record(log[1])
        if log[2] is not None:
            job_ids.add(log[2])

    _walk_inserts(BIG_DUMP, "joblog", handle)
    return {
        "count": log_stat.count,
        "min": log_stat.min_iso,
        "max": log_stat.max_iso,
        "span_years": log_stat.span_years,
        "distinct_job_ids": len(job_ids),
    }


def collect_departments() -> List[tuple]:
    rows: List[tuple] = []
    _walk_inserts(BIG_DUMP, "departments", rows.append)
    return rows


def roi_math() -> dict:
    technicians = 3
    minutes_saved_daily = 30
    rate = 75
    weekly_hours_saved = technicians * (minutes_saved_daily / 60) * 5
    yearly_hours_saved = weekly_hours_saved * 52
    yearly_value = yearly_hours_saved * rate
    poc_hours = 6
    prod_hours = 19
    low_rate, high_rate = 150, 200
    return {
        "weekly_hours_saved": weekly_hours_saved,
        "yearly_hours_saved": yearly_hours_saved,
        "yearly_value": yearly_value,
        "poc_budget_low": poc_hours * low_rate,
        "poc_budget_high": poc_hours * high_rate,
        "prod_budget_low": prod_hours * low_rate,
        "prod_budget_high": prod_hours * high_rate,
        "payback_months_at_max_budget": (
            (prod_hours * high_rate)
            / ((weekly_hours_saved * rate) * 52 / 12)
        ),
        "time_reduction_pct": (20 - 2) / 20,
    }


def main() -> None:
    jobs = collect_jobs_stats()
    joblog = collect_joblog_stats()
    departments = collect_departments()
    proservice_ai = _extract_auto_increment(PROSERVICE_DUMP, "proservice")
    proservice_rapport_ai = _extract_auto_increment(
        PROSERVICE_RAPPORT_DUMP, "proservice_rapport"
    )

    print("== Data volume ==")
    print(f"proservice AUTO_INCREMENT: {proservice_ai}")
    print(f"proservice_rapport AUTO_INCREMENT: {proservice_rapport_ai}")
    print(f"jobs rows: {jobs}")
    print(f"joblog rows: {joblog}")
    print("departments:", departments)
    print("== ROI math ==")
    print(roi_math())


if __name__ == "__main__":
    main()
