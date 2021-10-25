<?php

include_once("modelos/autor.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorAutor{

    public function inicio(){
        $autores = Autor::getAutores();
        include_once("vistas/autor/inicio.php");
    }

    public function crear(){
        if($_POST){
            Autor::crearAutor($_POST['nombre'],$_POST['apellido']);
            header('Location: ./?controlador=autor&accion=inicio');
        }
        include_once("vistas/autor/crear.php");
    }

    public function buscarAutor(){
        $autor = Autor::buscarAutor($_GET['id']);
        include_once("vistas/autor/editar.php");
    }

    public function editar(){

        if($_POST){
            print_r($_POST);
            Autor::editarAutor($_POST['id'], $_POST['nombre'],$_POST['apellido']);
            header('Location: ./?controlador=autor&accion=inicio');

        }
        
        $autor = Autor::buscarAutor($_GET['id']);
        include_once("vistas/autor/editar.php");
    }

}

?>