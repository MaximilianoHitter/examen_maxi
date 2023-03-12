<?php 
require_once('../models/pcModel.php');
class personas_cursos{
    private $model;

    public function __construct(){
        $model = new pcModel();
        $this->model = $model;
    }

    public function listar(){
        $rta = $this->model->listar();
        $salida = [];
        foreach ($rta as $key => $value) {
            $fila = [];
            $acciones = '';
            $acciones.= '<a href="editar_curso.php?legajo='.$value['legajo'].'" class="btn btn-primary">Editar</a> ';
            $acciones.= '<button href="eliminar_curso.php?legajo='.$value['legajo'].'" class="btn btn-danger" type="button" onclick="eliminar('.$value['legajo'].');">Borrar</button>';
            $fila[0] = $value['legajo'];
            $fila[1] = $value['nombre'];
            $fila[2] = $value['descripcion'];
            $fila[3] = $value['modalidad'];
            $fila[4] = $acciones;
            $salida[] = $fila;
        }
        return $salida;
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

}