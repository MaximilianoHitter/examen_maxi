<?php 
require_once('../models/personaModel.php');
class personas {
    private $model;

    public function __construct(){
        $model = new personaModel();
        $this->model = $model;
    }

    public function insertar($dni, $nombre, $apellido, $genero, $edad){
        if($dni != null && $dni != '' && $nombre != null && $nombre != '' && $apellido != null && $apellido != '' && $genero != null && $genero != '' && $edad != null && $edad != ''){
            $rta = $this->model->insertar($dni, $nombre, $apellido, $genero, $edad);
            if($rta){
                return header('Location:personas.php');;
            }else{
                return header('Location:agregar_persona.php?error=duplicado');
            }
        }else{
            return header('Location:agregar_persona.php?error=nulo');
        }
    }

    public function listar($dni = null){
        $rta = $this->model->listar($dni);
        $salida = [];
        foreach ($rta as $key => $value) {
            $fila = [];
            $acciones = '';
            $acciones.= '<a href="editar_persona.php?dni='.$value['dni'].'" class="btn btn-primary">Editar</a> ';
            $acciones.= '<button href="borrar.php?dni='.$value['dni'].'" class="btn btn-danger" type="button" onclick="eliminar('.$value['dni'].');">Borrar</button>';
            $fila[0] = $value['dni'];
            $fila[1] = $value['nombre'];
            $fila[2] = $value['apellido'];
            $fila[3] = $value['genero'];
            $fila[4] = $value['edad'];
            $fila[5] = $acciones;
            $salida[] = $fila;
        }
        return $salida;
    }

    public function update($dni, $nombre, $apellido, $genero, $edad){
        if($dni != null && $dni != '' && $nombre != null && $nombre != '' && $apellido != null && $apellido != '' && $genero != null && $genero != '' && $edad != null && $edad != ''){
            $rta = $this->model->update($dni, $nombre, $apellido, $genero, $edad);
            if($rta){
                return header('Location:personas.php');;
            }else{
                return header('Location:editar_persona.php?error=duplicado;dni='.$dni);
            }
        }else{
            return header('Location:editar_persona.php?error=nulo;dni='.$dni);
        }
    }

    public function delete($dni){
        $rta = $this->model->delete($dni);
        return $rta;
    }

}
