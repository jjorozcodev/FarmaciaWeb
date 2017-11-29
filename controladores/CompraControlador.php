<?php

class CompraControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $compra = new Compra();

        $allCompras = $compra->listar();

        $this->view("Compra", array(
            "allCompras"  => $allCompras     
         ));
    } 

    public function registrar(){
        
        if(isset($_POST["idMedicamento"])){

            $compra = new Compra();

            $compra->setIdCompra(NULL);
            $compra->setFecha($_POST["fecha"]); 
            $compra->setIdProveedor($_POST["idProveedor"]);
            $compra->setIdMedicamento($_POST["idMedicamento"]);
            $compra->setCantidad($_POST["cantidad"]);
            $save=$compra->guardar();
        }
        $this->redirect("Compra", "index");
    }

    public function borrar(){
        if(isset($_GET["idCompra"])){ 
            $id=(int)$_GET["idCompra"];
             
            $compra=new Compra();
            $compra->borrar($id); 
        }
        $this->redirect("Compra", "index");
    }

}
?>