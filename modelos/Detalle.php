<?php 

//Defenicion de las clases
class Detalle extends EntidadBase
{
    public $id;
    public $idMedicamento;    
    public $cantidad;

    //get

    public function getId()
    {
        return $this->id;
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

    public function setId($value)
    {
        $this->id = $value;
    }

    public function setIdMedicamento($value)
    {
        $this->idMedicamento = $value;
    }
    public function setCantidad($value)
    {
        $this->cantidad = $value;
    }

    //Constructor
    public function __construct($tabla) {
        parent::__construct($tabla);
    }
}
?>