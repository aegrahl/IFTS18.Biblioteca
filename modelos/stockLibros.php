<?php
class stockLibros{
    

    public static function crearLibroUsuario($titulo, $id_genero, $id_editorial, $id_autor, $id_usuario){
        $id_usuario = $_SESSION['id_usuario'];
        $id_libro = "";
        try{
        $connectionBD=BD::crearInstancia();
        $sql=$connectionBD->prepare("INSERT INTO libros(titulo, id_genero, id_editorial, id_autor) VALUES(?,?,?,?);");

        $sql->execute([$titulo, $id_genero, $id_editorial, $id_autor]);
        $id_libro = $connectionBD->lastInsertId();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $connectionBD=null;
        }

        try{
        $connectionBD=BD::crearInstancia();
        $isDisponible = 1;
        $sql=$connectionBD->prepare("INSERT INTO usuarios_libros (id_libro, id_usuario, is_venta) VALUES(?,?,?);");
        $sql->execute([$id_libro , $id_usuario , $isDisponible]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $connectionBD=null;
        }
    }


}