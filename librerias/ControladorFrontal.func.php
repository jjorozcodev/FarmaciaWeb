<?php

function cargarControlador($controlador){
    $controlador = uewords($controlador).'controlador';
    $strFileController='controlador/'.$controlador.'.php';

    if(!is_file($strFileController)){
        $strFileController='controlador/'.uewords(CONTROLADOR_DEFECTO).'Controlador.php';
    }

    require_once $strFileController;
    $controladorObj = new $controlador();
    return $controladorObj;
}

function cargarAccion($controladorObj, $accion){
    $action = $accion;
    $controladorObj->$action();
}

function lanzarAccion($controladorObj){
    if(isset($_GET["action"]) && method_exists($controladorObj, $_GET["action"])){
        cargarAccion($controladorObj, $_GET["action"]);
    }
    else{
        cargarAccion($controladorObj, ACCION_DEFECTO);
    }
}