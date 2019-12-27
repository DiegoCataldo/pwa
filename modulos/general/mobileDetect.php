<?php
if (!class_exists('Mobile_Detect')) {
  require 'lib/Mobile_Detect.php';
}


$mobble_detect = new Mobile_Detect();
$mobble_detect->setDetectionType('extended');

// funcion para detectar un movil
function es_movil()
{
  global $mobble_detect;
  return $mobble_detect->isMobile();
}

// funcion para detectar una tablet
function es_tablet()
{
  global $mobble_detect;
  return $mobble_detect->isTablet();
}



?>