<?php 

//Definicion de las clases
class ventas
{
    public idVenta;
    public Fecha;

    //get
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    public function getFecha()
    {
        return $this->Fecha;
    }

    //set
    public function setIdVenta($value)
    {
        $this->idVenta = $value;
    }
    public function setFecha($value)
    {
        $this->Fecha = $value;
    }
}
?>