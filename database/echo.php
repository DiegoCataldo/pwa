<?php
$database =  new SQLite3('db.sqlite');
$results = $database->query('SELECT * FROM Estacion');


while ($row = $results->fetchArray()) {
	$row = (object) $row;

	echo $row->e_cod . "</br>";
	echo $row->e_nombre . "</br>";
	echo "------------------";
	echo "</br>";


}