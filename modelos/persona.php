<?php

class Persona{

    private $nombre;
    private $apellido;
    // private $nacionalidad;

    function set_nombre($nombre) {
        $this->nombre = $nombre;
    }
    function get_nombre() {
        return $this->nombre;
    }

    function set_apellido($apellido) {
        $this->apellido = $apellido;
    }
    function get_apellido() {
        return $this->apellido;
    }

}

?>