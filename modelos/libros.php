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

        public static function crearLibro($titulo, $id_genero, $id_editorial, $id_autor) {

            $connectionBD=BD::crearInstancia();

            $sql=$connectionBD->prepare("INSERT INTO libros(titulo, id_genero, id_editorial, id_autor) VALUES(?,?,?,?);");

            $sql->execute([$titulo, $id_genero, $id_editorial, $id_autor]);
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

        public static function ListarLibros(array $libros) {
            
            $connectionBD = BD::crearInstancia();

            $sql = $connectionBD->query("select l.id_libro, l.titulo titulo, concat(a.nombre, ' ',a.apellido) as autor, g.nombre genero, e.nombre editorial from autores a
            inner join libros l on l.id_autor = a.id_autor
            inner join generos g on l.id_genero = g.id_genero
            inner join editoriales e on l.id_editorial = e.id_editorial");
            $sql->execute();
            $librosAretornar = $sql->fetchAll(PDO::FETCH_OBJ);
            return $librosAretornar;
        }
    }
?>