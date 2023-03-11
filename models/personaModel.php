<?php 
require_once('../models/db.php');
class personaModel{
    private $PDO;
    public function __construct(){
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($dni, $nombre, $apellido, $genero, $edad){
        try {
            $sql_exist = $this->PDO->prepare("INSERT INTO personas (dni, nombre, apellido, genero, edad) VALUES($dni, '$nombre', '$apellido', '$genero', $edad);");
            $sql_exist->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
            
    }

    public function listar($dni = null){
        if($dni != null && $dni != ''){
            $sql_condicion = ' WHERE dni='.$dni;
        }else{
            $sql_condicion = '';
        }
        try {
            $sql_exist = $this->PDO->prepare("SELECT * FROM personas $sql_condicion;");
            $sql_exist->execute();
            $listado = $sql_exist->fetchAll();
            return $listado;
        } catch (\Throwable $th) {
            return array();
        }
    }

    public function update($dni, $nombre, $apellido, $genero, $edad){
        try {
            $sql_exist = $this->PDO->prepare("UPDATE personas  SET nombre='$nombre', apellido='$apellido', genero='$genero', edad=$edad WHERE dni=$dni;");
            $sql_exist->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($dni){
        try{
            $sql = $this->PDO->prepare("DELETE FROM personas WHERE dni=$dni");
            $sql->execute();
            return true;
        } catch (PDOException $e){
            return false;
        }
    }
}