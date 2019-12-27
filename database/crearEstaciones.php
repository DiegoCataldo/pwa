<?php 

ini_set("session.cookie_lifetime",DURACION_SESION);
ini_set("session.gc_maxlifetime",DURACION_SESION); 
session_cache_expire(DURACION_SESION);


$urlWebService = 'http://www.ceazamet.cl/ws/pop_ws.php?fn=GetListaEstaciones&p_cod=ceazamet&user=cdom@ceaza.cl';

$array   = array();

$cont = 0;

if (($handle = fopen($urlWebService, 'r')) !== false) {
   while (($line = fgets($handle)) !== false) {
      if (!preg_match('/^#/', $line)) {
         if (trim($line) == 'Este servicio') {
            $objJsonGrafico = false;
            break;
         } else {
            $objJsonGrafico = true;
         }
         $arrayLine     = explode(',', trim($line));
         $array[$cont]['e_cod'] = $arrayLine[4];
         $array[$cont]['e_nombre'] = $arrayLine[5];
         $cont++;
      }
   }
   fclose($handle);
}

  
$newJsonString = json_encode($array);
file_put_contents('estaciones.json',$newJsonString);




?>