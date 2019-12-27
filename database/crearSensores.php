<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$str_datos = file_get_contents("estaciones.json");
$datos = json_decode($str_datos,true);

$data;
$i=0;

foreach($datos as $row){



    $llamadaLectura = 'http://www.ceazamet.cl/ws/pop_ws.php?fn=GetListaSensores&user=cdom@ceaza.cl&p_cod=ceazamet&e_cod='. $row['e_cod'].'&c0=e_cod&c1=s_cod&c2=tf_nombre&c3=um_notacion&c4=s_altura&c5=tm_cod';


    if (($handle = fopen($llamadaLectura, 'r')) !== false) {
        while (($line = fgets($handle)) !== false) {
            if (!preg_match('/^#/', $line)) {
                if (trim($line) == 'Este servicio') {
                    $arrayDatos = false;
                    break;
                }
                $arrayLine = explode(',', trim($line));

                $data[$i]['s_cod'] = $arrayLine[1]; // cod Sensor
                $data[$i]['e_cod'] = $arrayLine[0]; // cod estacion
                $data[$i]['s_tm'] = $arrayLine[5]; // cod tm 
                $i++;
            
            }
        }

    }
}

  
$newJsonString = json_encode($data);
file_put_contents('sensores.json',$newJsonString);


