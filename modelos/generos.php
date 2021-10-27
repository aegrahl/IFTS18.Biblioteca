<?php

class Generos{

    public $id_genero;
    public $nombre;


    public function __construct($id_genero, $nombre) {
        $this->id_genero = $id_genero;
        $this->nombre = $nombre;
    }

// Metodos
    public static function crearGenero($nombre){
        $conexionDB = BD::crearInstancia();
        $sql= $conexionDB->prepare("INSERT INTO generos(nombre) VALUES(?)");
        $sql->execute([$nombre]);
    }

    public static function getgeneros(){
        $conexionDB = BD::crearInstancia();
        $sql = $conexionDB->query("SELECT * FROM generos;");
        $listageneros = $sql->fetchAll(PDO::FETCH_OBJ);

        return $listageneros;
    }

    public static function buscarGenero($id_genero) {
            
        $connectionBD = BD::crearInstancia();
        $sql = $connectionBD->prepare("SELECT * FROM generos WHERE id_genero=?;");
        $sql->execute([$id_genero]);
        $generos = $sql->fetchAll(PDO::FETCH_OBJ);
        
        return $generos;
    }

    public static function editarAutor($id_genero, $nombre) {

        $connectionBD = BD::crearInstancia();
        $sql=$connectionBD->prepare("UPDATE generos SET nombre=? WHERE id_genero=?;");
        $sql->execute([$nombre, $id_generod]);
    }



}

?> 


