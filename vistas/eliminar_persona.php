<?php 
require_once('../controller/personas.php');
require_once('../controller/personas_cursos.php');
$controllerPersona = new personas();
if(isset($_GET['dni'])){
    $dni = $_GET['dni'];
    //comprobar si la persona esta inscripta a algun curso 
    $controllerPC = new personas_cursos();
    $rta_inscripcion = $controllerPC->personaInscripta($dni);
    if(is_array($rta_inscripcion)){
        //borrar las inscripciones
        $controllerPC->eliminarPersona($dni);
    }
    $rta = $controllerPersona->delete($dni);
    if($rta){
        $response = true;
    }else{
        $response = false;
    }
}else{
    $response = false;
}

echo json_encode($response);
exit;