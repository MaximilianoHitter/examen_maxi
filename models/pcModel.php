<?php 
require_once('../models/db.php');
class pcModel{
    private $PDO;
    public function __construct(){
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function listar($modalidad){
        try {
            $sql_exist = $this->PDO->prepare(" SELECT per.dni, per.nombre, per.apellido, per.edad, per.genero, pc.fecha, cur.legajo, cur.nombre FROM personas AS per INNER JOIN personas_cursos AS pc ON per.dni = pc.dni_persona INNER JOIN cursos AS cur ON pc.legajo_curso = cur.legajo WHERE cur.modalidad = '$modalidad'");
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

    public function personaInscripta($dni){
        $sql = $this->PDO->prepare("SELECT * FROM personas_cursos WHERE dni_persona = $dni");
        $sql->execute();
        $listado = $sql->fetch();
        return $listado;
    }

    public function cursoInscripto($legajo){
        $sql = $this->PDO->prepare("SELECT * FROM personas_cursos WHERE legajo_curso = $legajo");
        $sql->execute();
        $listado = $sql->fetch();
        return $listado;
    }

    public function eliminarPersona($dni){
        $sql = $this->PDO->prepare("DELETE FROM personas_cursos WHERE dni_persona = $dni");
        $sql->execute();    
    }

    public function eliminarCurso($legajo){
        $sql = $this->PDO->prepare("DELETE FROM personas_cursos WHERE legajo_curso = $legajo");
        $sql->execute();
    }
}