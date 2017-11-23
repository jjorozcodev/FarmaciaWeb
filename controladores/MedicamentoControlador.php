<?php

class MedicamentoControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $medicamento = new Medicamento();

        $allMedicamentos = $medicamento->getTodo();

        $this->view("Medicamento", array(
            "allMedicamentos"  => $allMedicamentos
        ));
    } 

    public function registrar(){
        
        if(isset($_POST["medicamento"])){

            $medicamento = new Medicamento();

            $medicamento->setIdMedicamento(NULL);
            $medicamento->setMedicamento($_POST["medicamento"]);
            $medicamento->setPresentacion($_POST["presentacion"]);
            $medicamento->setExistencias($_POST["existencias"]);
            $medicamento->setPrecio($_POST["precio"]);
            $save=$medicamento->guardar();
        }
        $this->redirect("Medicamento", "index");
    }


    public function editar(){
        if(isset($_POST["idMedicamento"])){
            
            $medicamento = new Medicamento();

            $medicamento->setIdMedicamento($_POST["idMedicamento"]);
            $medicamento->setMedicamento($_POST["medicamento"]);
            $medicamento->setPresentacion($_POST["presentacion"]);
            $medicamento->setExistencias($_POST["existencias"]);
            $medicamento->setPrecio($_POST["precio"]);
            $save=$medicamento->actualizar();
        }
        $this->redirect("Medicamento", "index");
    }

    public function borrar(){
        if(isset($_GET["idMedicamento"])){ 
            $id=(int)$_GET["idMedicamento"];
             
            $medicamento =new Medicamento();
           $medicamento->borrar($id);
        }
        $this->redirect("Medicamento", "index");
    }

}
?>