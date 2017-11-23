<?php 
//Defenicion de las clases
class Medicamento extends EntidadBase
{
    private $idMedicamento;
    private $medicamento;
    private $presentacion;
    private $existencias;
    private $precio;

    //creacion del constructor
    public function __construct() {
        $tb = "medicamentos";
        parent::__construct($tb);
    }

    //get
    public function getIdMedicamento()
    {
        return $this->idMedicamento;
    }

    public function getMedicamento()
    {
        return $this->medicamento;
    }

    public function getPresentacion()
    {
        return $this->presentacion;
    }

    public function getExistencias()
    {
        return $this->existencias;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    
    //set

    public function setIdMedicamento($value)
    {
        $this->idMedicamento = $value;
    }
    public function setMedicamento($value)
    {
        $this->medicamento = $value;
    }
    public function setPresentacion($value)
    {
        $this->presentacion = $value;
    }
    public function setExistencias($value)
    {
        $this->existencias = $value;
    }
    public function setPrecio($value)
    {
        $this->precio = $value;
    }

     //Método Para guardar un medicamento
     public function guardar(){
        $query="INSERT INTO medicamentos (idMedicamento, Medicamento, Presentacion, Existencias, Precio)
                VALUES (NULL,
                        '".$this->medicamento."' ,
                        '".$this->presentacion."' ,
                        '".$this->existencias."' ,
                        '".$this->precio."');";
        $guardado = $this->bd()->query($query);
        return $guardado;
    }

    //Método actualizar --- para actualizar en la BD
    public function actualizar(){
        $query="UPDATE medicamentos 
                SET Medicamento='".$this->medicamento."', 
                    Presentacion='".$this->presentacion."', 
                    Existencias='".$this->existencias."',
                    Precio='".$this->precio."'
                WHERE idMedicamento=".$this->idMedicamento.";";
        $actualizado = $this->bd()->query($query);
        return $actualizado;
    }

    public function borrar(int $id){
        $query="DELETE FROM medicamentos WHERE idMedicamento=".$id;
        $borrado=$this->bd()->query($query);
        return $borrado;
    }
}
?>