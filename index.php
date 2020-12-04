<?php 

require_once 'conexion/Conexion.php';
require_once 'controller/Personasc.php';

$controller_personas = new Personasc();

if(empty($_REQUEST['accion'])){
    $controller_personas->index();
}else{
    $metodo = $_REQUEST['accion'];
    if(method_exists($controller_personas, $metodo)){
        $controller_personas->$metodo();
    }else{
        $controller_personas->index();
    }
}


?>