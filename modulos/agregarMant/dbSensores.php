<?php

$viento = false;
$Tsuelo = false;
$Temp = false;
$Hrelativa = false;
$Patmosferica = false;
$RadGlobal = false;



$str_datos = file_get_contents("database/sensores.json");
$sensores = json_decode($str_datos,true);


foreach($sensores as $row){

	if ($row['e_cod'] == $e_cod) {
		if ($row['s_tm'] == 'vv_ms') {
			$viento = true;
		} else if ($row['s_tm'] == 'ts_c') {
			$Tsuelo = true;
		} else if ($row['s_tm'] == 'ta_c') {
			$Temp = true;
		} else if ($row['s_tm'] == 'hr') {
			$Hrelativa = true;
		} else if ($row['s_tm'] == 'pa_hpa') {
			$Patmosferica = true;
		} else if ($row['s_tm'] == 'rpar_umol' || $row['s_tm'] == 'rsdif_w' || $row['s_tm'] == 'rsdir_w') {
			$RadGlobal = true;
		}
	}
}


$str_datos = file_get_contents("database/estaciones.json");
$estaciones = json_decode($str_datos,true);

$e_nombre;

foreach($estaciones as $row){

	if ($row['e_cod'] == $e_cod) {
    $e_nombre = $row['e_nombre'];
	}
}

