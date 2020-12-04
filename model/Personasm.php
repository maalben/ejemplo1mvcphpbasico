<?php 

class Personasm{

    private $bd;
    private $listaPersonas;

    public function __construct(){
        $this->bd = Conexion::getConexion();
        $this->listaPersonas = array();
    }

    public function consultar(){
        $consulta = $this->bd->query("SELECT * FROM tblpersonas");
        while($fila = $consulta->fetch_assoc()){
            $this->listaPersonas[] = $fila;
        }
        return $this->listaPersonas;
    }



}


?>