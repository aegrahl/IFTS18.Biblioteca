<?php

include_once('modelos/usuario.php');
include_once('conexion.php');

BD::crearInstancia();

class ControladorUsuarios{

    //obtener todos los usuriarios
    public function inicio(){
        $usuarios = Usuario::getUsers();
        include_once("vistas/usuarios/inicio.php");
    }

    public function crear(){
        if($_POST){
            $response = Usuario::createUser($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['password'], $_POST['url_foto'], $_POST['rol']);
            if($response){
                echo '<script> alert("Se creo el usuario") </script>';
                header('Location: ./?controlador=usuarios&accion=inicio');
            }else{
                echo '<script> alert("Error al crear el usuario") </script>';
              
            }
        }

        include_once("vistas/usuarios/crear.php");
    }

}

?>