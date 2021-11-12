<?php

include_once('modelos/genero.php');
include_once('conexion.php');

BD::crearInstancia();

class ControladorGeneros{

    public function inicio(){
        $generos = Genero::getgeneros();
        include_once("vistas/genero/inicio.php");
    }

    public function crear(){
        if($_POST) {
            Genero::crearGenero($_POST['nombre']);
            // print_r($_POST);
            header('Location: ./?controlador=generos&accion=inicio');
        }

        include_once("vistas/genero/crear.php");
    }

    public function buscar(){

        $Genero = Genero::buscarGenero($_GET['id']);
        include_once("vistas/genero/editar.php");
    }

    public function editar(){

            if($_GET){
                $genero = Genero::buscarGenero($_GET['id_genero']);
                // print_r($genero);
                include_once("vistas/genero/editar.php");
               // header('Location:./?controlador=Genero&accion=editar');
            }

            if($_POST){
                // print_r($_POST);
                Genero::editarGenero($_POST['id_genero'],$_POST['nombre']);
                header('Location: ./?controlador=generos&accion=inicio');
            }

    }

    public function eliminar(){

        if($_GET){
            // print_r($_GET);
            Genero::eliminarGenero($_GET['id_genero']);
           header('Location:./?controlador=generos&accion=inicio');
        }


    }

}

?>