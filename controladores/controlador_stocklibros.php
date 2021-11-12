<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('modelos/stockLibros.php');
include_once('conexion.php');
include_once('modelos/libros.php');
include_once('conexion.php');
include_once('modelos/autor.php');
include_once('modelos/editorial.php');
include_once('modelos/genero.php');


class ControladorStockLibros{

    public function inicio(){
        $libros = stockLibros::getLibros();
        print_r($libros);
        include_once('vistas/stockLibro/inicio.php');
    }


    public function crear(){
        if($_GET){
            //Probando 
            $autores = Autor::getAutores();
            $editoriales = Editorial::getEditoriales();
            $generos = Genero::getGeneros();

        }

        if($_POST) {
            stockLibros::crearLibroUsuario($_POST['titulo'], $_POST['id_genero'], $_POST['id_editorial'],$_POST['id_autor'],$_SESSION['id_usuario']);
            //print_r($_POST);
            // Corregir esto
            header('Location: ./?controlador=libros&accion=inicio');
        }
        include_once('vistas/stockLibro/crear.php');
    }

    public function misLibros(){
        $misLibros = stockLibros::getMisLibros($_SESSION['id_usuario']);
        include_once('vistas/stockLibro/misLibros.php');
    }

    public function setVendido(){
        stockLibros::setVendido($_GET['id_libro']);
        header('Location: ./?controlador=stockLibros&accion=misLibros');
    }




}