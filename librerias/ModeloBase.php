<?php

    class ModeloBase extends EntidadBase{
        private $tabla;

        public function __construct($tb){
            $this->tabla=(string) $tb;
            parent::__construct($tb);
        }

        public function ejecutarSql($consultaSQL){
            $query=$this->bd()->query($consultaSQL);
            
            if($query==true){
                if($query->num_rows > 1){
                    while($row=$query->fetch_object()){
                        $resultSet[] = $row;
                    }
                }
                elseif($query->num_rows==1){
                    if($row = $query->fetch_object()){
                        $resultSet = $row;
                    }
                }
                else{
                    $resultSet = true;
                }
            }
            else{
                $resultSet=false;
            }
            return $resultSet;
        }
    }
?>