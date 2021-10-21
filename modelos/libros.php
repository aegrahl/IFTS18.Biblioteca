<?php
    class Libros {

        //validar campos de la BD y nombres
        public $id;
        public $nombre;
        public $autor;

        public function __construct($id, $nombre, $autor) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->autor= $autor;
        }

        public static function getLibros() {
            
            $connectionBD = BD::crearInstancia();
            $sql = $connectionBD->query("SELECT * FROM libros;");
            $listaLibros = $sql->fetchAll(PDO::FETCH_OBJ);
            
            return $listaLibros;
        }

        public static function crearLibro($nombre, $autor) {

            $connectionBD=BD::crearInstancia();

            $sql=$connectionBD->prepare("INSERT INTO libros(nombre, autor) VALUES(?,?);");

            $sql->execute([$nombre, $autor]);
        }

        public static function eliminarLibro($id) {

            $connectionBD = BD::crearInstancia();
            $sql= $connectionBD->prepare("DELETE FROM libros WHERE id=?;");
            $sql->execute([$id]);
        }
    }
?>