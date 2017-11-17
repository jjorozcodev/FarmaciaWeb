<?php 

//Defenicion de las clases
class Proveedor
{
    public $idProveedor;
    public $proveedor;
    public $telefono;
    public $direccion;

    //get
    public function getIdproveedor()
    {
        return $this->idProveedor;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    
    //set

    public function setIdproveedor($value)
    {
        $this->idProveedor = $value;
    }
    public function setProveedor($value)
    {
        $this->Proveedor = $value;
    }
    public function setTelefono($value)
    {
        $this->telefono = $value;
    }
    public function setDireccion($value)
    {
        $this->direccion = $value;
    }
}
?>