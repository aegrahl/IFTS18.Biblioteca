<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('modelos/stockLibros.php');
include_once('conexion.php');

class ControladorStockLibros{

    public function inicio(){
        include_once('vistas/stockLibro/inicio.php');
    }




}