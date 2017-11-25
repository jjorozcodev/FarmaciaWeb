<?php 

//Defenicion de las clases
class Venta extends EntidadBase
{
    private $idVenta;
    private $fecha;
    private $medicamento;
    private $cantidad;
    private $precio;

    public function __construct() {
        $tb = "ventas";
        parent::__construct($tb);
    }
    
    //get
    public function getIdVenta()
    {
        return $this->idVenta;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getMedicamento()
    {
        return $this->medicamento;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getPrecio()
    {
        return $this->precio;
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

    public function setMedicamento($value)
    {
        $this->medicamento = $value;
    }

    public function setCantidad($value)
    {
        $this->cantidad = $value;
    }

    public function setPrecio($value)
    {
        $this->precio = $value;
    }
    public function guardar(){
        $query="INSERT INTO ventas (idVenta,Fecha, Medicamento,Cantidad,Precio)
                VALUES (NULL,
                        '".$this->fecha."',
                        '".$this->medicamento."' ,
                        '".$this->cantidad."' ,
                        '".$this->precio."');";
        $guardado = $this->bd()->query($query);
        return $guardado;
    }

    public function borrar(int $id){
        $query="DELETE FROM ventas WHERE idVenta=".$id;
        $borrado=$this->bd()->query($query);
        return $borrado;
    }
}
?>