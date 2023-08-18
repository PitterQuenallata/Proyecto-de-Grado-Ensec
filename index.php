<?php

require_once "src/controllers/plantilla.controlador.php";
require_once "src/controllers/usuarios.controlador.php";
require_once "src/models/usuarios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();