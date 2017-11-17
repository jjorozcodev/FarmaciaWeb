<?php 

//Defenicion de las clases
class Usuario
{
    public $idUsuario;
    public $usuario;
    public $contraseña;

    //get
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }
    //set

    public function setIdUsuario($value)
    {
        $this->idUsuario = $value;
    }
    public function setUsuario($value)
    {
        $this->usuario = $value;
    }
    public function setContraseña($value)
    {
        $this->contraseña = $value;
    }
}
?>