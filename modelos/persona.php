<?php

class Persona{

    public $nombre;
    public $apellido;
    // private $nacionalidad;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // function set_nombre($nombre) {
    //     $this->nombre = $nombre;
    // }
    // function get_nombre() {
    //     return $this->nombre;
    // }

    // function set_apellido($apellido) {
    //     $this->apellido = $apellido;
    // }
    // function get_apellido() {
    //     return $this->apellido;
    // }

}
