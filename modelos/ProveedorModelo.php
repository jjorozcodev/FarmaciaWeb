<?php
    class ProveedoresModelo extends ModeloBase{
        private $tabla;

        public function __construct(){
            $this->tabla = "proveedores";
            parent::__construct($this->tabla);
        }

        //Metodos de consulta
        public function getUnProveedor(){
            $query="SELECT * FROM proveedores WHERE idProveedor=1";
            $prov=$this->ejecutarSql($query);
            return $prov;
        }
    }
?>