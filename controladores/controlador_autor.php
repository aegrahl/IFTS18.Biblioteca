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
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            Autor::crear($nombre,$apellido);
        }
        include_once("vistas/autor/crear.php");
    }

    public function editar(){
        include_once("vistas/autor/editar.php");
    }

}

?>