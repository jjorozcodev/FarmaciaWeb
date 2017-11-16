<?php 

//Definicion de las clases
class compras
{
    public idCompra;
    public Fecha;

    //get
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    public function getFecha()
    {
        return $this->Fecha;
    }
    
    //set
    public function setIdCompra($value)
    {
        $this->idCompra = $value;
    }
    public function setFecha($value)
    {
        $this->Fecha = $value;
    }
}
?>