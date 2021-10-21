<?php

include_once('modelos/libros.php');
include_once('connection.php');

BD::crearInstancia();

class ControladorLibros{

    public function inicio(){

        $libros = Libros::getLibros();

        include_once("vistas/libros/inicio.php");
    }

    public function crear(){

        if($_POST) {
            Libros::crearLibro($_POST['nombre'],$_POST['autor']);
            header('Location: ./?controlador=libros&accion=inicio');
        }

        include_once("vistas/libros/crear.php");
    }

    public function editar(){
        include_once("vistas/libros/editar.php");
    }

    public function eliminar(){

        Libros::eliminarLibro($_GET['id']);
        include_once("vistas/libros/editar.php");
    }

}

?>