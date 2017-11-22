<?php
require_once 'configuracion/globales.php';
require_once 'librerias/ControladorBase.php';
require_once 'librerias/ControladorFrontal.func.php';

if(isset($_GET["controller"]))
    $controladorObj = cargarControlador($_GET["controller"]);
else
    $controladorObj = cargarControlador(CONTROLADOR_DEFECTO);

lanzarAccion($controladorObj);
?>