<?php 

//Definicion de las clases
class medicamentos
{
    public idMedicamento;
    public Medicamento;
    public Presentacion;
    public Existencias;
    public Precio;

    //get
    public function getIdMedicamento()
    {
        return $this->idMedicamento;
    }

    public function getMedicamento()
    {
        return $this->Medicamento;
    }

    public function getPresentacion()
    {
        return $this->Presentacion;
    }

    public function getExistencias()
    {
        return $this->Existencias;
    }

    public function getPrecio()
    {
        return $this->Precio;
    }
    
    //set
    public function setIdMedicamento($value)
    {
        $this->idMedicamento = $value;
    }
    public function setMedicamento($value)
    {
        $this->Medicamento = $value;
    }
    public function setPresentacion($value)
    {
        $this->Presentacion = $value;
    }
    public function setExistencias($value)
    {
        $this->excistencia = $value;
    }
    public function setPrecio($value)
    {
        $this->Precio = $value;
    }
}
?>