<?php 

//Definicion de las clases
class proveedores
{
    public idProveedor;
    public Proveedor;
    public Telefono;
    public Direccion;

    //get
    public function getidProveedor()
    {
        return $this->idProveedor;
    }

    public function getProveedor()
    {
        return $this->Proveedor;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }

    public function getDireccion()
    {
        return $this->Direccion;
    }
    
    //set
    public function setidProveedor($value)
    {
        $this->idProveedor = $value;
    }
    public function setProveedor($value)
    {
        $this->Proveedor = $value;
    }
    public function setTelefono($value)
    {
        $this->Telefono = $value;
    }
    public function setDireccion($value)
    {
        $this->Direccion = $value;
    }
}
?>