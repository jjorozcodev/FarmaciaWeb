<?php
    class EntidadBase{
        private $tabla;
        private $bd;
        private $conexion;

        public function __construct($tb){
            $this->tabla=(string) $tb;

            require_once 'Conexion.php';
            $this->conexion=new Conexion();
            $this->bd=$this->conexion->conectar();
        }

        public function getConexion(){
            return $this->conexion;
        }

        public function bd(){
            return $this->bd;
        }

        public function getTodo(){
            $query=$this->bd->query("SELECT * From $this->tabla");
            $resultSet=array();
            while($row=$query->fetch_object()){
                $resultSet[]=$row;   
            }
            
            return $resultSet;
        }

    }