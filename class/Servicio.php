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

    public function validar(){
        $alertas = [];

        if(!$this->nombre)
            $alertas[] = "El nombre es obligatorio";

        if(!$this->descripcion)
            $alertas[] = "La descripción es obigatoria";

        return $alertas;
    }

    public function guardar(){
        $sql = "INSERT INTO servicios(nombre, descripcion)
                VALUES('{$this->nombre}', '{$this->descripcion}')";
        echo $sql;      
    }
}