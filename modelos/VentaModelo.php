<?php
    class VentaModelo extends ModeloBase{
        private $tabla;

        public function __construct(){
            $this->tabla = "ventas";
            parent::__construct($this->tabla);
        }

        //Metodos de consulta
        public function getVenta(){
            $query="SELECT * FROM ventas";
            $prov=$this->ejecutarSql($query);
            return $prov;
        }
    }
?>