<?php 

//Defenicion de las clases
class Detalleventa
{
    public $idVenta;
    public $idMedicamento;    
    public $cantidad;

    //get
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    public function getIdMedicamento()
    {
        return $this->idMedicamento;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
    //set

    public function setIdVenta($value)
    {
        $this->idVenta = $value;
    }
    public function setIdMedicamento($value)
    {
        $this->idMedicamento = $value;
    }
    public function setCantidad($value)
    {
        $this->cantidad = $value;
    }
}
?>