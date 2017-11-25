<?php

require_once 'configuracion/globales.php';
require_once 'librerias/ControladorBase.php';
require_once 'librerias/ControladorFrontal.func.php';

if(isset($_GET["controlador"])){
    $controladorObj = cargarControlador($_GET["controlador"]);
}
else{
    $controladorObj = cargarControlador(CONTROLADOR_DEFECTO);
}
lanzarAccion($controladorObj);
?>