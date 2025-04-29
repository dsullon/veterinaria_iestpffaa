<?php 
class Servicio {
    public $id;
    public $nombre;
    public $descripcion;
    public $imagen;

    private $db;

    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? '';
        $this->descripcion = $args["descripcion"] ?? '';
        $this->imagen = $args["imagen"] ?? 'ND';
    }

    public function setDB($database){
        $this->db = $database;
    }

    public function validar(){
        $alertas = [];

        if(!$this->nombre)
            $alertas[] = "El nombre es obligatorio";

        if(!$this->descripcion)
            $alertas[] = "La descripción es obigatoria";

        return $alertas;
    }

    public function all(){
        $query = "SELECT * FROM servicios";
        $stm = $this->db->prepare($query);
        $stm->execute();
        $resultado = $stm->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function find(int $id){
        $query = "SELECT * FROM servicios WHERE id = :id";
        $stm = $this->db->prepare($query);
        $stm->execute([':id' => $id]);
        $resultado = $stm->fetch(PDO::FETCH_ASSOC);
        
        return new self($resultado);
    }

    public function save(){
        echo $this->id;
        if(!is_null($this->id)){
            // TODO: Actualizar 
            $this->update();
        } else {
            // TODO: Crear
            $this->create();
        }
    }

    private function create(){
        $query = "INSERT INTO servicios(nombre, descripcion, imagen)
                VALUES(:nombre, :descripcion, :imagen)";
        $stm = $this->db->prepare($query);
        $params = [
            ':nombre' => $this->nombre, 
            ':descripcion' => $this->descripcion,
            ':imagen' => $this->imagen
        ];
        $stm->execute($params);
    }

    private function update(){
        $query = "UPDATE servicios 
                SET nombre = :nombre, descripcion = :descripcion,
                    imagen = :imagen
                WHERE id = :id";
        $stm = $this->db->prepare($query);
        $stm->execute([':nombre' => $this->nombre, ':descripcion' => $this->descripcion, 
                        ':imagen' => $this->imagen, ':id' => $this->id]);
    }
}