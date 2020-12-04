<?php 

require_once 'model/Personasm.php';

class Personasc{

    private $model_persona;

    public function __construct(){
        $this->model_persona = new Personasm();
    }

    public function index(){
        $consulta = $this->model_persona->consultar();
        require_once 'view/Personasv.php';
    }

    public function guardar(){
        echo "Ustedes ya me creen?";
    }


}


?>