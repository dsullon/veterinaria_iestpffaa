<?php 
class Servicio {
    public $nombre;
    public $descripcion;
    public $imagen;

    public function __construct($args = []) {
        $this->nombre = $args["nombre"] ?? '';
        $this->descripcion = $args["descripcion"] ?? '';
        $this->imagen = $args["imagen"] ?? '';
    }
}