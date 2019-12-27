<?php

$llamadaLectura = 'http://www.ceazamet.cl/ws/pop_ws.php?fn=GetListaSensores&user=cdom@ceaza.cl&p_cod=ceazamet&e_cod='. $e_cod.'&c0=e_cod&c1=s_cod&c2=tf_nombre&c3=um_notacion&c4=s_altura&c5=tm_cod';





$arraySensores;
$i=0;

$viento=false;
$Tsuelo=false;
$Temp=false;
$Hrelativa = false;
$Patmosferica =false;
$RadGlobal = false;

if (($handle = fopen($llamadaLectura, 'r')) !== false) {
    while (($line = fgets($handle)) !== false) {
        if (!preg_match('/^#/', $line)) {
            if (trim($line) == 'Este servicio') {
                $arrayDatos = false;
                break;
            }
            $arrayLine = explode(',', trim($line));
            if($arrayLine[5]=='vv_ms'){
                $viento=true;
            }else if($arrayLine[5]=='ts_c'){
                $Tsuelo=true;
            }else if($arrayLine[5]=='ta_c'){
                $Temp=true;
            }else if($arrayLine[5]=='hr'){
                $Hrelativa=true;
            }else if($arrayLine[5]=='pa_hpa'){
                $Patmosferica=true;
            }else if($arrayLine[5]=='rpar_umol' || $arrayLine[5]=='rsdif_w' || $arrayLine[5 == 'rsdir_w'] ){
                $RadGlobal=true;
            }
 
            //echo $arraySensores[$i];
        }
    }
    fclose($handle);
}



$llamadaLectura2 = 'http://www.ceazamet.cl/ws/pop_ws.php?fn=GetListaEstaciones&user=cdom@ceaza.cl&p_cod=ceazamet&user=anon@nohost.com&c0=e_lat&c1=e_lon&c2=e_altitud&c3=e_ultima_lectura&c4=e_cod&c5=e_nombre&c6=e_primera_lectura'