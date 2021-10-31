<?php

include_once('modelos/editorial.php');
include_once('conexion.php');

BD::crearInstancia();

class ControladorEditorial{

    public function inicio(){
        $editoriales = Editorial::getEditoriales();
        include_once("vistas/editorial/inicio.php");
    }

    public function crear(){
        if($_POST) {
            Editorial::crearEditorial($_POST['nombre']);
            print_r($_POST);
            header('Location: ./?controlador=editorial&accion=inicio');
        }

        include_once("vistas/editorial/crear.php");
    }

    public function buscar(){

        $editorial = Editorial::buscarEditorial($_GET['id']);
        include_once("vistas/editorial/editar.php");
    }

    public function editar(){

            if($_GET){
                $editorial = Editorial::buscarEditorial($_GET['id_editorial']);
                print_r($editorial);
                include_once("vistas/editorial/editar.php");
               // header('Location:./?controlador=editorial&accion=editar');
            }

            if($_POST){
                print_r($_POST);
                Editorial::editarEditorial($_POST['id_editorial'],$_POST['nombre']);
                header('Location: ./?controlador=editorial&accion=inicio');
            }

    }

    public function eliminar(){

        if($_GET){
            print_r($_GET);
            Editorial::eliminarEditorial($_GET['id_editorial']);
            header('Location:./?controlador=autor&accion=inicio');
        }


    }

}

?>