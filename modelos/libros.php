<?php
    class Libros {

        //Validar cual de los dos van si public o private
        // public $id;
        // public $titulo;
        // public $autor;

        //Propiedades
        private $id;
        private $titulo;
        private $fechaPublicacion;
        private $editorial;
        private $edicion;
        private $genero;

        public function __construct($id, $titulo, $autor) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor= $autor;
        }

        public static function crearLibro($titulo, $autor) { //$titulo, $fechaPublicacion, $editorial, $edicion, $genero

            $connectionBD=BD::crearInstancia();

            $sql=$connectionBD->prepare("INSERT INTO libros(titulo, autor) VALUES(?,?);");

            $sql->execute([$titulo, $autor]);
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