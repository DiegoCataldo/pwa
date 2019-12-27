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
         $array['e_cod'][$cont] = $arrayLine[4];
         $array['e_nombre'][$cont] = $arrayLine[5];
         $cont++;
      }
   }
   fclose($handle);
}

$database = new SQLite3('db.sqlite');

for ($i = 0; $i < $cont; $i++) {
   $e_cod = $array['e_cod'][$i];
   $e_nombre = $array['e_nombre'][$i];
   $database->exec("INSERT INTO Estacion (e_cod, e_nombre) VALUES ('$e_cod', '$e_nombre')");
}
 
?>

*/