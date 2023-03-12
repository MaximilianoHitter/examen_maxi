<?php 
require_once('../models/pcModel.php');
class personas_cursos{
    private $model;

    public function __construct(){
        $model = new pcModel();
        $this->model = $model;
    }

    public function listar($modalidad){
        $rta = $this->model->listar($modalidad);
        return $rta;
    }

    public function personaAnotada($legajo, $dni){
        $rta = $this->model->personaAnotada($legajo, $dni);
        if(is_array($rta)){
            return true;
        }else{
            return false;
        }
    }

    public function inscribir($legajo, $dni){
        $rta = $this->model->inscribir($legajo, $dni);
        return $rta;
    }

    public function eliminar($dni, $legajo){
        $rta = $this->model->eliminar($dni, $legajo);
        return $rta;
    }

    public function personaInscripta($dni){
        $rta = $this->model->personaInscripta($dni);
        return $rta;
    }

    public function cursoInscripto($legajo){
        $rta = $this->model->cursoInscripto($legajo);
        return $rta;
    }

    public function eliminarPersona($dni){
        $this->model->eliminarPersona($dni);
    }

    public function eliminarCurso($legajo){
        $this->model->eliminarCurso($legajo);
    }

}