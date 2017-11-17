<?php
    class Conexion{
        private $driver, $host, $user, $pass, $bd, $charset;
        
        public function __construct() {
            $db_cfg = require_once 'configuracion/baseDatos.php';
            $this->driver = $db_cfg("driver");
            $this->host = $db_cfg("host");
            $this->user = $db_cfg("user");
            $this->pass = $db_cfg("pass");
            $this->bd = $db_cfg("bd");
            $this->charset = $db_cfg("charset");      
        }

        public function conectar(){
            if($this->driver=="mysql" || $this->driver==null){
                $con = new mysqli($this->host, $this->user, $this->pass, $this->bd);
                $con->query("SET NAMES '".$this->charset."'");
            }
            return $con;
        }
        
    }