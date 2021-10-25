<?php
    class Libros {

        public $id;
        public $titulo;
        public $genero;
        public $editorial;
        public $autor;

        public function __construct($id, $titulo, $genero, $editorial, $autor) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->genero= $genero;
            $this->editorial= $editorial;
            $this->autor= $autor;
        }

        public static function crearLibro($titulo, $genero, $editorial, $autor) {

            $connectionBD=BD::crearInstancia();

            $sql=$connectionBD->prepare("INSERT INTO libros(titulo, genero, editorial, id_autor) VALUES(?,?,?,?);");

            $sql->execute([$titulo, $genero, $editorial, $autor]);
        }

        public static function getLibros() {
            
            $connectionBD = BD::crearInstancia();
            $sql = $connectionBD->query("SELECT * FROM libros;");
            $listaLibros = $sql->fetchAll(PDO::FETCH_OBJ);
            
            return $listaLibros;
        }

        public static function buscarLibro($id) {
            
            $connectionBD = BD::crearInstancia();
            $sql = $connectionBD->prepare("SELECT * FROM libros WHERE id=?;");
            $sql->execute([$id]);
            $libro = $sql->fetchAll(PDO::FETCH_OBJ);
            
            return $libro;
        }

        public static function editar($id, $titulo, $genero, $editorial, $autor) {

            $connectionBD = BD::crearInstancia();
            $sql=$connectionBD->prepare("UPDATE libros SET titulo=?, genero=?, editorial=?, id_autor=? WHERE id=?;");
            $sql->execute([$titulo, $genero, $editorial, $autor, $id]);
        }

        public static function eliminarLibro($id) {

            $connectionBD = BD::crearInstancia();
            $sql= $connectionBD->prepare("DELETE FROM libros WHERE id=?;");
            $sql->execute([$id]);
        }
    }
?>