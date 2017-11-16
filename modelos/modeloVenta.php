<?php 

//Defenicion de las clases
class Venta
{
    public idVenta;
    public fecha;

    //get
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    //set

    public function setIdVenta($value)
    {
        $this->idVenta = $value;
    }
    public function setFecha($value)
    {
        $this->fecha = $value;
    }
}
?>