<?php

include_once( 'connection.php');

BD::crearInstancia();

class ControladorLibros{

    public function inicio(){
        include_once("vistas/libros/inicio.php");
    }

    public function crear(){
        include_once("vistas/libros/crear.php");
    }

    public function editar(){
        include_once("vistas/libros/editar.php");
    }

}

?>