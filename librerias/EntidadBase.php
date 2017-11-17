<?php
class EntidadBase{
    private $table, $bd, $conectar;

    public function __construct($table){
        $this->table=(string) $table;

        require_once 'conexion.php';
        $this->conectar=new conectar();
        $this->db=$this->conexion->conectar();
    }

    public function getConectar(){
        return $this->conectar;
    }

    public function getAll(){
        $query=$this->bd->query("SELECT * From $this->table ORDER BY id=$id");

        if($row=$query->fetch_object()){
            $resultSet=$row;   
        }
        
        return $resultSet;
    }
}