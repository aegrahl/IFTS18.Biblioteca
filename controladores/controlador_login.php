<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("modelos/login.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorLogin { 


    public function inicio(){

        if($_GET){
            include_once("vistas/login/login.php");
        }


        if($_POST){
            $user = $_POST['user'];
            $password = $_POST['password'];
            // verify user and password not null
            if($user != null && $password != null){
                $login = new Login($user, $password);
                $isValid = $login->verifyUser(); 
                if($isValid){
                    session_start();
                    $_SESSION['user'] = $user;
                    echo '<script>console.log("Ingreso"); </script>';
                    Header("Location: index.php");
                }else{
                    echo '<script>alert("Usuario o contraseña incorrectos"); </script>';
                }
            } else {
                echo '<script>alert("usuario o contraseña vacíos"); </script>';
            }
        }
    }

    public function logout(){
        session_destroy();
        header("Location: index.php");
    }


    

}

?>

