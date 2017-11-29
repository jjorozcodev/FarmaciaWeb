<?php

class VentaControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $venta = new Venta();

        $allVentas = $venta->listar();

        $this->view("Venta", array(
            "allVentas"  => $allVentas      
         ));
    } 

    public function registrar(){
        
        if(isset($_POST["idMedicamento"])){

            $venta = new Venta();

            $venta->setIdVenta(NULL);
            $venta->setFecha(date("y/m/d")); 
            $venta->setIdMedicamento($_POST["idMedicamento"]);
            $venta->setCantidad($_POST["cantidad"]);
            $save=$venta->guardar();
        }
        $this->redirect("Venta", "index");
    }

    public function borrar(){
        if(isset($_GET["idVenta"])){ 
            $id=(int)$_GET["idVenta"];
             
            $venta=new Venta();
            $venta->borrar($id); 
        }
        $this->redirect("Venta", "index");
    }

}
?>