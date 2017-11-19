<?php
    class MedicamentosModelo extends ModeloBase{
        private $tabla;

        public function __construct(){
            $this->tabla = "medicamentos";
            parent::__construct($this->tabla);
        }

        //consulta
        public function getMedicamento(){
            $query="SELECT * FROM medicamentos WHERE idMedicamento=1";
            $prov=$this->ejecutarSql($query);
            return $prov;
        }
    }
?>