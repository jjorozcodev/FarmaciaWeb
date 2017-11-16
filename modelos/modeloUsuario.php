<?php 

//Definicion de las clases
class usuarios
{
    public idUsuario;
    public Usuario;
    public Clave;

    //get
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getUsuario()
    {
        return $this->Usuario
    }

    public function getClave()
    {
        return $this->clave;
    }

    //set
    public function setIdUsuario($value)
    {
        $this->idUsuario = $value;
    }
    public function setUsuario($value)
    {
        $this->Usuario = $value;
    }
    public function setClave($value)
    {
        $this->clave = $value;
    }
}
?>