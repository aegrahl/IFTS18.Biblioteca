<?php

include_once("modelos/persona.php");


class Autor extends Persona{

    //Propiedades
    //private $foo;

// Metodos
    public static function crearAutor($nombre, $apellido){
        $conexionDB = BD::crearInstancia();
        $sql= $conexionDB->prepare("INSERT INTO autores(nombre, apellido) VALUES(?,?)");
        $sql->execute([$nombre,$apellido]);
    }

    public static function getAutores(){
        $conexionDB = BD::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM autores;");
        $listaAutores = $sql->fetchAll(PDO::FETCH_OBJ);

        return $listaAutores;
    }

    public static function buscarAutor($id) {
            
        $connectionBD = BD::crearInstancia();
        $sql = $connectionBD->prepare("SELECT * FROM autores WHERE id_autor=?;");
        $sql->execute([$id]);
        $autor = $sql->fetchAll(PDO::FETCH_OBJ);
        
        return $autor;
    }

    public static function editarAutor($id, $nombre, $apellido) {

        $connectionBD = BD::crearInstancia();
        $sql=$connectionBD->prepare("UPDATE autores SET nombre=?, apellido=? WHERE id_autor=?;");
        $sql->execute([$nombre, $apellido, $id]);
    }


}

?> 


