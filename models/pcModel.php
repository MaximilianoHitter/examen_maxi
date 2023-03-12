<?php 
require_once('../models/db.php');
class pcModel{
    private $PDO;
    public function __construct(){
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function listar(){
        try {
            $sql_exist = $this->PDO->prepare("SELECT cur.legajo, cur.nombre,  FROM cursos AS cur ");
            $sql_exist->execute();
            $listado = $sql_exist->fetchAll();
            return $listado;
        } catch (\Throwable $th) {
            return array();
        }
    }

    public function personaAnotada($legajo, $dni){
        $sql = $this->PDO->prepare("SELECT * FROM personas_cursos WHERE legajo_curso = $legajo AND dni_persona = $dni");
        $sql->execute();
        $listado = $sql->fetch();
        return $listado;
    }

    public function inscribir($legajo, $dni){
        try {
            $sql = $this->PDO->prepare("INSERT INTO personas_cursos VALUES(DEFAULT, $dni, $legajo, DEFAULT)");
            $sql->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
        
    }

    public function eliminar($dni, $legajo){
        try {
            $sql = $this->PDO->prepare("DELETE FROM personas_cursos WHERE dni_persona=$dni AND legajo_curso=$legajo");
            $sql->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
        
    }
}