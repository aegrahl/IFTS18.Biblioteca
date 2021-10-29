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

        if($_GET){
            $autor = Autor::buscarAutor($_GET['id_autor']);
            print_r($autor);
            include_once("vistas/autor/editar.php");
           // header('Location:./?controlador=editorial&accion=editar');
        }

        if($_POST){
            print_r($_POST);
            Autor::editarAutor($_POST['id_autor'],$_POST['nombre'],$_POST['apellido']);
            header('Location: ./?controlador=autor&accion=inicio');
        }
    }
    
    public function eliminar(){

        if($_GET){
            print_r($_GET);
            Autor::eliminarAutor($_GET['id_autor']);
           header('Location:./?controlador=editorial&accion=inicio');
        }


    }
}

?>