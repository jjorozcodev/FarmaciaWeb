<?php

class VentaControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $venta = new Venta();

        $allVentas = $venta->getTodo();

        $this->view("venta", array(
            "allVentas"  => $allVentas      
         ));
    } 

    public function registrar(){
        
        if(isset($_POST["venta"])){

            $venta = new Venta();

            $venta->setIdVenta(NULL);
            $venta->setFecha($_POST["fecha"]);
            $venta->setMedicamento($_POST["medicamento"]);
            $venta->setCantidad($_POST["cantidad"]);
            $venta->setPrecio($_POST["precio"]);
            $save=$venta->guardar();
        }
        $this->redirect("Venta", "index");
    }

}
?>