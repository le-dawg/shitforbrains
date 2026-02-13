<?php

        if (!empty($filter4)) {$filter4 = $_SESSION['uid'];}
	$where = array();
	if ( !empty ( $firma_navn ) ) $where[] = "LOWER(`firma_navn`)LIKE'%" . "$firma_navn" . "%'";
	if ( !empty ( $v_ref ) ) $where[] = "LOWER(`v_ref`)='" . $v_ref . "'";
	if ( !empty ( $ans ) ) $where[] = "LOWER(`ans`)='" . $ans . "'";
	if ( !empty ( $rapport ) ) $where[] = "LOWER(`id`)LIKE'%" . $rapport . "%'";
	if ( !empty ( $status ) or $status == '0') $where[] = "LOWER(`status_kode`)='" . $status . "'";
	if ( !empty ( $ind ) or $ind == '0') $where[] = "LOWER(`ind_kode`)='" . $ind . "'";
	if ( !empty ( $d_ref ) ) $where[] = "LOWER(`d_ref`) LIKE '%" . $d_ref  . "%'";
	if ( !empty ( $navn ) ) $where[] = "LOWER(`navn`)LIKE'%" . $navn . "%'";
	if ( !empty ( $adresse ) ) $where[] = "LOWER(`adresse`)LIKE'%" . $adresse . "%'";
	if ( !empty ( $post ) ) $where[] = "LOWER(`post`) LIKE'%" . $post . "%'";
	if ( !empty ( $land ) ) $where[] = "LOWER(`land`) LIKE'%" . $land . "%'";
	if ( !empty ( $navn_lev ) ) $where[] = "LOWER(`Navn_lev`)LIKE'%" . $navn_lev . "%'";
	if ( !empty ( $adresse_lev ) ) $where[] = "LOWER(`Adresse_lev`)LIKE'%" . $adresse_lev . "%'";
	if ( !empty ( $post_lev ) ) $where[] = "LOWER(`post_lev`) LIKE'%" . $post_lev . "%'";
	if ( !empty ( $land_lev ) ) $where[] = "LOWER(`land_lev`) LIKE'%" . $land_lev . "%'";
	if ( !empty ( $revk ) ) $where[] = "LOWER(`revk`) LIKE '%" . $revk . "%'";
	if ( !empty ( $telefon  ) ) $where[] = "LOWER(`telefon`)LIKE '%" . $telefon . "%'";
	if ( !empty ( $mobil ) ) $where[] = "LOWER(`mobil`)LIKE '%" . $mobil . "%'";
	if ( !empty ( $mail ) ) $where[] = "LOWER(`mail`)LIKE '%" . $mail . "%'";
	if ( !empty ( $fabrikat ) ) $where[] = "LOWER(`fabrikat`)LIKE '%" . $fabrikat . "%'";
	if ( !empty ( $type ) ) $where[] = "LOWER(`type`)LIKE '%" . $type . "%'";
	if ( !empty ( $maskine ) ) $where[] = "LOWER(`maskine`)LIKE '%" . $maskine . "%'";
	if ( !empty ( $sn_nr ) ) $where[] = "LOWER(`sn_nr`)LIKE '%" . $sn_nr . "%'";
	if ( !empty ( $dato ) ) $where[] = "LOWER(`dato`)LIKE '%" . $dato . "%'";
	if ( !empty ( $filter1 ) ) $where[] = "LOWER(`ind_kode`)= '" . $filter1 . "'";
	if ( !empty ( $filter2 ) ) $where[] = "LOWER(`ind_kode`)!= '5' AND id >= '100000'";
	if ( !empty ( $filter3 ) ) $where[] = "flag = 'ROD'";
	if ( !empty ( $filter4 ) ) $where[] = "ans = '$filter4'";
	if ( !empty ( $filter5 ) ) $where[] = "LOWER(`status_kode`) = '9'";
	if ( !empty ( $filter6 ) ) $where[] = "LOWER(`status_kode`) != '9'";
	$where = implode(' AND ', $where);
	$query = "SELECT * FROM proservice WHERE " . $where;
	$query8 = "SELECT * FROM prosalg WHERE " . $where;
	$qry = "SELECT COUNT(id) AS antal FROM proservice WHERE " . $where;
?>