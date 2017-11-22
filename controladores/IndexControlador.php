<?php

class IndexControlador extends ControladorBase{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        header("Location:menu.php");
    }
}
?>