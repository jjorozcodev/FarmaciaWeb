<?php 

//Defenicion de las clases
class Compra
{
<<<<<<< HEAD:modelos/modeloCompra.php
    private idCompra;
    private Fecha;
=======
    public $idCompra;
    public $fecha;
>>>>>>> c34616f466cbc940ccb19c468b5effb77465075b:modelos/Compra.php

    //get
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    //set

    public function setIdCompra($value)
    {
        $this->idCompra = $value;
    }
    public function setFecha($value)
    {
        $this->fecha = $value;
    }
}
?>