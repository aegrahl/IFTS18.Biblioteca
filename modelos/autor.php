<?php

include_once("modelos/persona.php");


class Autor extends Persona{

    //Propiedades
    //private $foo;

// Metodos
    public static function crear($nombre, $apellido){
        $conexionDB = BD::crearInstancia();
        // $this->nombre = $nombre;
        // $this->apellido = $apellido;
        print_r($nombre, $apellido);
        $sql= $conexionDB->prepare("INSERT INTO autores(nombre, apellido) VALUES(?,?)");
        $sql->execute(array($nombre,$apellido));
    }
}



?> 


