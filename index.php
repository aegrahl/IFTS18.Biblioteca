<?php

// validar Switcg para verificar controladores?
// acceso default
$controlador="login";
$accion="inicio";


//Un poco mas linda
if( (isset($_GET['controlador']) && isset($_GET['accion'])) && (!empty($_GET['controlador']) && (!empty($_GET['accion'] !="")))) {

        $controlador = $_GET["controlador"];
        $accion = $_GET["accion"];
}


require_once("vistas/template.php");
?>