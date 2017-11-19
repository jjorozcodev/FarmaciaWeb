<?php

class MedicamentoControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $medicamento = new Medicamento();

        $allMedicamento = $medicamento->getTodo();

        $this->view("Medicamento", array(
            "allMedicamento"  => $allMedicamento,
           // "JJ"=> "JJ saluda desde MVC" la verdad no se si esto se ocupe XD
        ));
    } 

    public function crear(){
        
        if(isset($_POST["idMedicamento"])){

            $medicamento = new Medicamento();

            $medicamento->setIdMedicamento($_POST["idMedicamento"]);
            $medicamento->setMedicamento($_POST["medicamento"]);
            $medicamento->setPresentacion($_POST["presentacion"]);
            $medicamento->setExistencia($_POST["existencia"]);
            $medicamento->setPrecio($_POST["precio"]);
            $save=$medicamento->guardar();
        }
        $this->redirect("Medicamento", "index");
    }

    public function borrar(){
        if(isset($_GET["idMedicamento"])){ 
            $id=(int)$_GET["idMedicamento"];
             
            $medicamento =new Medicamento();
            $medicamento->deleteById($id); 
        }
        $this->redirect();
    }

}
?>