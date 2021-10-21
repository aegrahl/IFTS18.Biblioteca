<?php

include_once("conexion.php");

BD::crearInstancia();

class ControladorLibros{

    public function inicio(){
        include_once("vistas/libros/inicio.php");
    }

    public function crear(){
        if($_POST){
            print_r($_POST);
        }
        include_once("vistas/libros/crear.php");
    }

    public function editar(){
        include_once("vistas/libros/editar.php");
    }

}

?>