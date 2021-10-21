<?php
    class Libros {

        //Validar cual de los dos van si public o private
        public $id;
        public $nombre;
        public $autor;

        //Propiedades
        private $titulo;
        private $fechaPublicacion;
        private $editorial;
        private $edicion;
        private $genero;

        public function __construct($id, $nombre, $autor) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->autor= $autor;
        }

        public static function crearLibro($nombre, $autor) { //$titulo, $fechaPublicacion, $editorial, $edicion, $genero

            $connectionBD=BD::crearInstancia();

            $sql=$connectionBD->prepare("INSERT INTO libros(nombre, autor) VALUES(?,?);");

            $sql->execute([$nombre, $autor]);
        }

        public static function getLibros() {
            
            $connectionBD = BD::crearInstancia();
            $sql = $connectionBD->query("SELECT * FROM libros;");
            $listaLibros = $sql->fetchAll(PDO::FETCH_OBJ);
            
            return $listaLibros;
        }

        public static function eliminarLibro($id) {

            $connectionBD = BD::crearInstancia();
            $sql= $connectionBD->prepare("DELETE FROM libros WHERE id=?;");
            $sql->execute([$id]);
        }
    }
?>