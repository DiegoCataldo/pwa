<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = new SQLite3('db.sqlite');
$results = $database->query('SELECT * FROM Estacion');

$data;
$i=0;
$cont=0;

while ($row = $results->fetchArray()) {
    $row = (object) $row;

    $llamadaLectura = 'http://www.ceazamet.cl/ws/pop_ws.php?fn=GetListaSensores&user=cdom@ceaza.cl&p_cod=ceazamet&e_cod='. $row->e_cod.'&c0=e_cod&c1=s_cod&c2=tf_nombre&c3=um_notacion&c4=s_altura&c5=tm_cod';


    if (($handle = fopen($llamadaLectura, 'r')) !== false) {
        while (($line = fgets($handle)) !== false) {
            if (!preg_match('/^#/', $line)) {
                if (trim($line) == 'Este servicio') {
                    $arrayDatos = false;
                    break;
                }
                $arrayLine = explode(',', trim($line));

                $data[$i][0] = $arrayLine[1]; // cod Sensor
                $data[$i][1] = $arrayLine[0]; // cod estacion
                $data[$i][2] = $arrayLine[5]; // cod tm 
                $i++;
                $cont++;
            
            }
        }
        fclose($handle);
    }
    
}
$database->close();

$database2 = new SQLite3('db.sqlite');
for ($j = 0; $j < $cont; $j++) {
    $s_cod = $data[$j][0];
    $e_cod = $data[$j][1];
    $tm_cod = $data[$j][2];
    $database2->exec("INSERT INTO Sensor (s_cod, e_cod, tm_cod) VALUES ('$s_cod', '$e_cod', '$tm_cod')");
 }
