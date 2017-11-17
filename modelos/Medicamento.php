<?php 
//Defenicion de las clases
class Medicamento
{
    public $idMedicamento;
    public $medicamento;
    public $presentacion;
    public $existencia;
    public $precio;

    //get
    public function getIdMedicamento()
    {
        return $this->idMedicamento;
    }

    public function getMedicamento()
    {
        return $this->medicamento;
    }

    public function getPresentacion()
    {
        return $this->presentacion;
    }

    public function getExistencia()
    {
        return $this->existencia;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    
    //set

    public function setIdMedicamento($value)
    {
        $this->idMedicamento = $value;
    }
    public function setMedicamento($value)
    {
        $this->medicamento = $value;
    }
    public function setPresentacion($value)
    {
        $this->presentacion = $value;
    }
    public function setExistencia($value)
    {
        $this->excistencia = $value;
    }
    public function setPrecio($value)
    {
        $this->precio = $value;
    }
}
?>