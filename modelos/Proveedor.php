<?php 

<<<<<<< HEAD:modelos/modeloProveedor.php
//Definicion de las clases
class proveedores extends EntidadBase
{
    private $idProveedor, $proveedor, $telefono, $direccion;

    //Constructor
    public function __construct($table){
        $table = "proveedores";
        parent::__construct($table);
    }
=======
//Defenicion de las clases
class Proveedor
{
    public $idProveedor;
    public $proveedor;
    public $telefono;
    public $direccion;
>>>>>>> c34616f466cbc940ccb19c468b5effb77465075b:modelos/Proveedor.php

    //get
    public function getIdproveedor()
    {
        return $this->idProveedor;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    
    //set

    public function setIdproveedor($value)
    {
        $this->idProveedor = $value;
    }
    public function setProveedor($value)
    {
        $this->proveedor = $value;
    }
    public function setTelefono($value)
    {
        $this->telefono = $value;
    }
    public function setDireccion($value)
    {
        $this->direccion = $value;
    }
}
?>