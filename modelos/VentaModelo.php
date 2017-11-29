<?php
    class VentasModelo extends ModeloBase{
        private $tabla;

        public function __construct(){
            $this->tabla = "ventas";
            parent::__construct($this->tabla);
        }

        //Metodos de consulta
        public function getVenta(){
            $query="SELECT * FROM ventas WHERE idVenta=1";
            $prov=$this->ejecutarSql($query);
            return $prov;
        }
    }
?>