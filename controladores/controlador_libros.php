<?php

include_once('modelos/libros.php');
include_once('conexion.php');

BD::crearInstancia();

class ControladorLibros{

    public function inicio(){

        $libros = Libros::getLibros();

        include_once("vistas/libros/inicio.php");
    }

    public function crear(){

        if($_POST) {
            Libros::crearLibro($_POST['titulo'], $_POST['genero'], $_POST['editorial'],$_POST['autor']);
            print_r($_POST);
            header('Location: ./?controlador=libros&accion=inicio');
        }

        include_once("vistas/libros/crear.php");
    }

    public function buscar(){

        $libro = Libros::buscarLibro($_GET['id']);
        include_once("vistas/libros/editar.php");
    }

    public function editar(){

        if($_POST){
            Libros::editar($_POST['id'], $_POST['titulo'],$_POST['genero'],$_POST['editorial'],$_POST['autor']);
            print_r($_POST);
            header('Location: ./?controlador=libros&accion=inicio');

        }
        
        $libro = Libros::buscarLibro($_GET['id']);
        include_once("vistas/libros/editar.php");
    }

    

    public function eliminar(){

        Libros::eliminarLibro($_GET['id']);
        header('Location: ./?controlador=libros&accion=inicio');
    }

}

?>