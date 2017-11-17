<?php

class AyudaVistas{
    public function url($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO){
        $urlString="index.php?controlador=".$controlador."&accion=".$accion;
        return $urlString;
    }
}