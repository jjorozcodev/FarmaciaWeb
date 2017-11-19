<?php 
//Defenicion de las clases
class Medicamento extends EntidadBase
{
    private $idMedicamento;
    private $medicamento;
    private $presentacion;
    private $existencia;
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

    public function getExistencia()
    {
        return $this->existencia;
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
    public function setExistencia($value)
    {
        $this->excistencia = $value;
    }
    public function setPrecio($value)
    {
        $this->precio = $value;
    }

     //Método Para guardar un medicamento
     public function guardar(){
        $query="INSERT INTO medicamentos (idMedicamento, Medicamento, Presentacion, Existencia ,Precio)
                VALUES (NULL,
                        '".$this->medicamento."' ,
                        '".$this->presentacion."' ,
                        '".$this->existencia."' ,
                        '".$this->precio."');";
        $guardado = $this->bd()->query($query);
        return $guardado;
    }
}
?>