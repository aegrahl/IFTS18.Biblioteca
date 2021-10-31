<?php

include_once('modelos/libros.php');
include_once('conexion.php');
include_once('modelos/autor.php');
include_once('modelos/editorial.php');
include_once('modelos/genero.php');

BD::crearInstancia();

class ControladorLibros{

    public function inicio(){

        // $libros = Libros::getLibros();
        $librosListados = Libros::ListarLibros();
        include_once("vistas/libros/inicio.php");
    }

    public function crear(){

        if($_GET){
            //Probando 
            $autores = Autor::getAutores();
            $editoriales = Editorial::getEditoriales();
            $generos = Genero::getGeneros();

        }
        if($_POST) {
            Libros::crearLibro($_POST['titulo'], $_POST['id_genero'], $_POST['id_editorial'],$_POST['id_autor']);
            print_r($_POST);
            header('Location: ./?controlador=libros&accion=inicio');
        }

        include_once("vistas/libros/crear.php");
    }

    public function buscar(){

        $libro = Libros::buscarLibro($_GET['id_libro']);
        include_once("vistas/libros/editar.php");
    }

    public function editar(){

        if($_GET){
            $libro = libros::buscarLibro($_GET['id_libro']);
            //print_r($libro);
            include_once("vistas/libros/editar.php");
           // header('Location:./?controlador=editorial&accion=editar');
        }

        if($_POST){
            //print_r($_POST);
            Libros::editarLibro($_POST['id_libro'], $_POST['titulo'], $_POST['id_genero'], $_POST['id_editorial'],$_POST['id_autor']);
            //header('Location: ./?controlador=editorial&accion=inicio');
            // como no paraba de arrojar error con header ....
            echo '<script> window.location="./?controlador=libros&accion=inicio"</script>';
        }
    }

    

    public function eliminar(){
        if($_GET){
            print_r($_GET);
            Libros::eliminarLibro($_GET['id_libro']);
            header('Location:./?controlador=libros&accion=inicio');
        }
    }

}
?>