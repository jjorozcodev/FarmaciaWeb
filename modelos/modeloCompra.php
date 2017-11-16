<?php 

//Defenicion de las clases
class Compra
{
    public idCompra;
    public fecha;

    //get
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    //set

    public function setIdCompra($value)
    {
        $this->idCompra = $value;
    }
    public function setFecha($value)
    {
        $this->fecha = $value;
    }
}
?>