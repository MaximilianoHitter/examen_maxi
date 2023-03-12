<?php 
require_once('../models/cursoModel.php');
class cursos{
    private $model;

    public function __construct(){
        $model = new cursoModel();
        $this->model = $model;
    }

    public function insertar($legajo, $nombre, $descripcion, $modalidad){
        if($legajo != null && $legajo != '' && $nombre != null && $nombre != '' && $descripcion != null && $descripcion != '' && $modalidad != null && $modalidad != ''){
            $rta = $this->model->insertar($legajo, $nombre, $descripcion, $modalidad);
            if($rta){
                return header('Location:cursos.php');;
            }else{
                return header('Location:agregar_curso.php?error=duplicado');
            }
        }else{
            return header('Location:agregar_curso.php?error=nulo');
        }
    }

    public function listar($legajo = null){
        $rta = $this->model->listar($legajo);
        $salida = [];
        foreach ($rta as $key => $value) {
            $fila = [];
            $acciones = '';
            $acciones.= '<a href="editar_curso.php?legajo='.$value['legajo'].'" class="btn btn-primary">Editar</a> ';
            $acciones.= '<button href="eliminar_curso.php?legajo='.$value['legajo'].'" class="btn btn-danger" type="button" onclick="eliminar('.$value['legajo'].');">Borrar</button> ';
            $acciones.= '<a href="inscribir.php?legajo='.$value['legajo'].'" class="btn btn-secondary">Inscribir</a> ';
            $acciones.= '<a href="desinscribir.php?legajo='.$value['legajo'].'" class="btn btn-warning">Desinscribir</a>';
            $fila[0] = $value['legajo'];
            $fila[1] = $value['nombre'];
            $fila[2] = $value['descripcion'];
            $fila[3] = $value['modalidad'];
            $fila[4] = $acciones;
            $salida[] = $fila;
        }
        return $salida;
    }

    public function update($legajo, $nombre, $descripcion, $modalidad){
        if($legajo != null && $legajo != '' && $nombre != null && $nombre != '' && $descripcion != null && $descripcion != '' && $modalidad != null && $modalidad != ''){
            $rta = $this->model->update($legajo, $nombre, $descripcion, $modalidad);
            if($rta){
                return header('Location:cursos.php');;
            }else{
                return header('Location:editar_curso.php?error=duplicado;legajo='.$legajo);
            }
        }else{
            return header('Location:editar_curso.php?error=nulo;legajo='.$legajo);
        }
    }

    public function delete($legajo){
        $rta = $this->model->delete($legajo);
        return $rta;
    }

    public function buscar($nombre, $modalidad){
        $rta = $this->model->buscar($nombre, $modalidad);
        return $rta;
    }

}