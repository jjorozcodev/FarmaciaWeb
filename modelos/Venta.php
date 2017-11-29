<?php 

//Defenicion de las clases
class Venta extends EntidadBase
{
    private $idVenta;
    private $fecha;
    private $idMedicamento;
    private $cantidad;

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
    public function setFecha($value)
    {
        $this->fecha = $value;
    }

    public function setIdMedicamento($value)
    {
        $this->idMedicamento = $value;
    }

    public function setCantidad($value)
    {
        $this->cantidad = $value;
    }

    public function guardar(){
        $query="INSERT INTO ventas (idVenta, Fecha, idMedicamento, cantidad)
                VALUES (NULL,
                        '".$this->fecha."' ,
                        '".$this->idMedicamento."' ,
                        '".$this->cantidad."');";
        $guardado = $this->bd()->query($query);

        $sqlUpdate = "UPDATE medicamentos SET Existencias = Existencias - ".$this->cantidad." WHERE idMedicamento=".$this->idMedicamento.";";

        $this->bd()->query($sqlUpdate);
        return $guardado;
    }

    public function borrar(int $id){
        $query="DELETE FROM ventas WHERE idVenta=".$id;
        $borrado=$this->bd()->query($query);
        return $borrado;
    }

    public function listar(){
        $query=$this->bd()->query("SELECT ventas.idVenta, ventas.Fecha, medicamentos.Medicamento, medicamentos.Precio, ventas.cantidad FROM ventas inner join medicamentos on ventas.idMedicamento = medicamentos.idMedicamento;");
        $resultSet=array();
        while($row=$query->fetch_object()){
            $resultSet[]=$row;   
        }
        
        return $resultSet;
    }

}
?>