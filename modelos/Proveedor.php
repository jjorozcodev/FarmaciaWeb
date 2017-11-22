<?php 

    //Definicion de las clases
    class Proveedor extends EntidadBase
    {
        private $idProveedor;
        private $proveedor;
        private $telefono;
        private $direccion;

        //Constructor
        public function __construct() {
            $tb = "proveedores";
            parent::__construct($tb);
        }
    
        //get
        public function getIdproveedor()
        {
            return $this->idProveedor;
        }

        public function getProveedor()
        {
            return $this->proveedor;
        }

        public function getTelefono()
        {
            return $this->telefono;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }
        
        //set

        public function setIdProveedor($value)
        {
            $this->idProveedor = $value;
        }
        public function setProveedor($value)
        {
            $this->proveedor = $value;
        }
        public function setTelefono($value)
        {
            $this->telefono = $value;
        }
        public function setDireccion($value)
        {
            $this->direccion = $value;
        }


        //Método Guardar --- para almacenar en la BD
        public function guardar(){
            $query="INSERT INTO proveedores (idProveedor, Proveedor, Telefono, Direccion)
                    VALUES (NULL,
                            '".$this->proveedor."' ,
                            '".$this->telefono."' ,
                            '".$this->direccion."');";
            $guardado = $this->bd()->query($query);
            return $guardado;
        }

        //Método actualizar --- para actualizar en la BD
        public function actualizar(){
            $query="UPDATE proveedores 
                    SET Proveedor='".$this->proveedor."', 
                        Telefono='".$this->telefono."', 
                        Direccion='".$this->direccion."'
                    WHERE idProveedor=".$this->idProveedor.";";
            $actualizado = $this->bd()->query($query);
            return $actualizado;
        }

    }
?>