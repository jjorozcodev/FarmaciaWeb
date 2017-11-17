<?php

class ProveedorControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $proveedor= new Proveedor();

        $allProveedores = $proveedor->getAll();

        $this->view("index", array(
            "allProveedores"=>$allProveedores,
            "Hola"=> "Esto es un ejemplo de MVC"
        ));
    } 

    public function crear(){
        if(isset($_POST["nombre"])){
            $proveedor = new Proveedor();

            $nombre = $_POST["nombre"];

            $proveedor->setProveedor($nombre);
            
        }

    }

}