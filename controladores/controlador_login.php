<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("modelos/login.php");
include_once('modelos/usuario.php');
include_once("conexion.php");

BD::crearInstancia();

class ControladorLogin { 


    public function inicio(){

            include_once("vistas/login/login.php");
      
        if($_POST){
            $user = $_POST['user'];
            $password = $_POST['password'];
            // verify user and password not null
            if($user != null && $password != null){
                $login = new Login($user, $password);
                $isValid = $login->verifyUser(); 
                if($isValid){
                    //echo '<p class="success">Exito!</p>';
                   // echo '<script>console.log("Ingreso"); </script>';
                    //Header("Location: index.php");
                    echo '<script>window.location.href = "index.php";</script>';
                   // Header('Location: ./?controlador=welcome&accion=inicio');
                    //window.location.replace("http://nuevapagina.php/");
                    die();
                }else{
                    echo '<p class="error">La contraseña es incorrecta!</p>';
                    echo '<script>alert("Usuario o contraseña incorrectos"); </script>';
                }
            } else {
                echo '<script>alert("usuario o contraseña vacíos"); </script>';
            }
        }
    }

    public function logout(){
        $_SESSION = array();
        session_destroy();
        echo '<script>alert("Sesión cerrada"); </script>';
        echo '<script> window.location="index.php"</script>';
    }


    public function registro(){
        if($_POST){
            $response = Usuario::createCommonUser($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['password']);
            $rol=2;
            if($response){
                header('Location: ./?controlador=login&accion=inicio');
                // no llega a mostrarlo
                //echo '<script> alert("Se creo el usuario") </script>';
            }else{
                echo '<script> alert("Error al crear el usuario") </script>';
              
            }
        }

        include_once("vistas/login/registro.php");
    }

}

?>

