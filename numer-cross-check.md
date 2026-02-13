# Executive Summary Number Cross‑Check

Validated with `python validate_numbers.py` against the dumps in `Dump20260209` (run output captured on this branch).

## Data-derived facts
- `proservice` table definition shows `AUTO_INCREMENT=210331`, implying up to 210,330 historical service IDs, but no row data is present in the dump to confirm actual count or date coverage.
- `proservice_rapport` definition shows `AUTO_INCREMENT=99287`, again without accompanying rows.
- `Dump20250625.sql` (table `jobs`): 14,866 rows with creation timestamps ranging **2018-06-21 → 2025-06-25** (~7.0 years). Closing timestamps span **2021-01-22 → 2025-06-24**.
- `Dump20250625.sql` (table `joblog`): 212,890 rows tied to 14,850 distinct jobs with timestamps **2021-02-15 → 2025-06-25** (~4.36 years).
- Departments recorded in the dump are uppercase-only codes: `VIBY`, `JYL`, `PADB`, `SALG` (plus `noDepartment` sentinel).

## Validation of executive summary figures
- **“20 years of repair knowledge”** – Not supported by available data. The longest observed span is ~7 years in `jobs` and ~4 years in `joblog`; the dumps do not include earlier history.
- **“210,000 service reports”** – Partially supported. The `proservice` auto-increment hints at ~210k historical IDs, but the only populated dataset (`jobs`) holds 14,866 jobs, while `joblog` holds 212,890 log entries (not full reports). The dumps lack concrete rows for `proservice` to verify the headline count.
- **Hidden data quirks** – Only the uppercase department-code issue is observable (codes are uppercase). The dumps do not contain timer/worklog detail to confirm the “dash in hours”, orphan log codes, legacy Danish encoding, or dual-date-field issues.
- **POC investment** – 6 hours × \$150–\$200/hr ⇒ **\$900–\$1,200** (validated).
- **Production total** – 19 hours × \$150–\$200/hr ⇒ **\$2,850–\$3,800** (validated).
- **Time reduction** – 20 minutes → 2 minutes is a **90%** reduction ((20−2)/20).
- **ROI scenario** – 3 technicians × 0.5 hr/day × 5 days = **7.5 hr/week** ⇒ **390 hr/year**. At \$75/hr this is **\$29,250/year**. Payback for the \$3,800 scenario ≈ **1.56 months** (3,800 ÷ (7.5×75×52/12)), consistent with the stated “~1.5 months.”

## How to reproduce
Run `python validate_numbers.py` from the repo root to regenerate the figures above; the script streams the dumps to avoid extra dependencies.
