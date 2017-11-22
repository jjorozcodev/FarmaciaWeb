<?php 

//Defenicion de las clases
class Compra extends EntidadBase
{
    private $idCompra;
    private $fecha;
    private $idProveedor;
    public $compras = array();

    //get
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    
    public function getIdProveedor()
    {
        return $this->idProveedor;
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
    public function setIdProveedor($value){
        $this->idProveedor = $value;
    }

    // Constructor
    // Al crearse también recupera los datos del detalle
    public function __construct() {
        $tbC = "compras";
        parent::__construct($tbC);
        $detalleCompras= new detalle("detallecompra");
        
        $this->$compras = $detalleCompras->getTodo();
    }

    //Método Para guardar un Compra
    public function guardar(){
        $query="INSERT INTO compras (idCompra, Fecha, idProveedor)
                VALUES (NULL,
                        '".$this->fecha."' ,
                        '".$this->idProveedor."');";
        $guardado = $this->bd()->query($query);
        return $guardado;
    }

    public function borrar(int $id){
        $query="DELETE FROM compras WHERE idCompra=".$id;
        $borrado=$this->bd()->query($query);
        return $borrado;
    }

    private function guardarDetalle(){
        $detalleCompras = new detalle("detallecompra");
        $detalleCompras->guardarItems("detallecompra", $compras, $this->idCompra);
    }

}
?>