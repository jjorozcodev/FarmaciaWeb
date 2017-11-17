<?php 

//Definicion de las clases
class proveedores extends EntidadBase
{
    private $idProveedor, $proveedor, $telefono, $direccion;

    //Constructor
    public function __construct($table){
        $table = "proveedores";
        parent::__construct($table);
    }

    //get
    public function getidProveedor()
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
    public function setidProveedor($value)
    {
        $this->idProveedor = $value;
    }
    public function setProveedor($value)
    {
        $this->proveedor = $value;
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