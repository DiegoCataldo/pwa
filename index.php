<?php
include 'modulos/general/header.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$str_datos = file_get_contents("database/estaciones.json");
$estaciones = json_decode($str_datos,true);



?>
<div class="row">

    <div class="col-md-3">
    </div>

    <div class="col-md-6">
        <div class="card" style="margin-top:5%">


            <!-- Card body -->
            <div class="card-body" style="padding:1rem;">
                <form id="agregarEstacion" action="agregarMant.php" method="POST" class="needs-validation">

                    <div class="md-form">
                        <p class="h6 mb-6"> Estación </p>

                        <div class="md-form ">
                            <i class="fas fa-clipboard-check blue-text prefix"></i>

                            <select id="m_ecod" name="m_ecod" class="mdb-select md-form py-1 ml-5" searchable="Busqueda"
                                required>
                                <option selected>Selecciona la estación</option>
                                <?php
                        
                                foreach($estaciones as $row){
                             
                                 echo "<option value='" . $row['e_cod']. "'>" . $row['e_nombre'] . "</option>";
                                }
                              ?>

                            </select>
                        </div>
                    </div>
                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-cyan" name="save" type="submit">Agregar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <link href="css/addons-pro/steppers.min.css" rel="stylesheet">

    <script src="./script.js"></script>
    <script type="text/javascript" src="js/addons-pro/stepper.js"></script>
    <script type="text/javascript" src="modulos/agregarMant/agregarMant.js"></script>