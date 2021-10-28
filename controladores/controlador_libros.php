<?php

include_once('modelos/libros.php');
include_once('conexion.php');
include_once('modelos/autor.php');
include_once('modelos/editorial.php');
include_once('modelos/generos.php');

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
            $generos = Generos::getGeneros();

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

        if($_POST){
            Libros::editar($_POST['id_libro'], $_POST['titulo'],$_POST['genero'],$_POST['editorial'],$_POST['autor']);
            header('Location: ./?controlador=libros&accion=inicio');

        }
        
        $libro = Libros::buscarLibro($_GET['id']);
        include_once("vistas/libros/editar.php");
    }

    

    public function eliminar(){

        Libros::eliminarLibro($_GET['id_libro']);
        header('Location:./?controlador=libros&accion=inicio');
    }

}

?>