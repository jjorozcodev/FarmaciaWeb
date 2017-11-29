<?php 

//Defenicion de las clases
class Compra extends EntidadBase
{
    private $idCompra;
    private $fecha;
    private $idProveedor;
    private $idMedicamento;
    private $cantidad;

    public function __construct() {
        $tb = "compras";
        parent::__construct($tb);
    }
    
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

    public function getIdMedicamento()
    {
        return $this->idMedicamento;
    }

    public function getCantidad()
    {
        return $this->cantidad;
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

    public function setIdProveedor($value)
    {
        $this->idProveedor = $value;
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
        $query="INSERT INTO compras (idCompra, Fecha, idProveedor, idMedicamento, cantidad)
                VALUES (NULL,
                        '".$this->fecha."' ,
                        '".$this->idProveedor."' ,
                        '".$this->idMedicamento."' ,
                        '".$this->cantidad."');";
        $guardado = $this->bd()->query($query);


        
        $sqlUpdate = "UPDATE medicamentos SET Existencias = Existencias + ".$this->cantidad." WHERE idMedicamento=".$this->idMedicamento.";";
        
        $this->bd()->query($sqlUpdate);

        return $guardado;
    }

    public function borrar(int $id){
        $query="DELETE FROM compras WHERE idCompra=".$id;
        $borrado=$this->bd()->query($query);
        return $borrado;
    }

    public function listar(){
        $query=$this->bd()->query("SELECT compras.idCompra, compras.Fecha, proveedores.Proveedor, medicamentos.Medicamento, medicamentos.Precio, compras.cantidad 
        FROM compras inner join proveedores on proveedores.idProveedor = compras.idProveedor 	inner join medicamentos on compras.idMedicamento = medicamentos.idMedicamento;");
        $resultSet=array();
        while($row=$query->fetch_object()){
            $resultSet[]=$row;   
        }
        
        return $resultSet;
    }
}
?>