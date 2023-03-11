<?php 
require_once('../models/db.php');
class cursoModel{
    private $PDO;
    public function __construct(){
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($legajo, $nombre, $descripcion, $modalidad){
        try {
            $sql_exist = $this->PDO->prepare("INSERT INTO cursos (legajo, nombre, descripcion, modalidad) VALUES($legajo, '$nombre', '$descripcion', '$modalidad');");
            $sql_exist->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
            
    }

    public function listar($legajo = null){
        if($legajo != null && $legajo != ''){
            $sql_condicion = ' WHERE legajo='.$legajo;
        }else{
            $sql_condicion = '';
        }
        try {
            $sql_exist = $this->PDO->prepare("SELECT * FROM cursos $sql_condicion;");
            $sql_exist->execute();
            $listado = $sql_exist->fetchAll();
            return $listado;
        } catch (\Throwable $th) {
            return array();
        }
    }

    public function update($legajo, $nombre, $descripcion, $modalidad){
        try {
            $sql_exist = $this->PDO->prepare("UPDATE cursos  SET nombre='$nombre', descripcion='$descripcion', modalidad='$modalidad' WHERE legajo=$legajo;");
            $sql_exist->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($legajo){
        try{
            $sql = $this->PDO->prepare("DELETE FROM cursos WHERE legajo=$legajo");
            $sql->execute();
            return true;
        } catch (PDOException $e){
            return false;
        }
    }
}