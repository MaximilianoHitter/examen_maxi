<?php 
require_once('../controller/cursos.php');
require_once('../controller/personas_cursos.php');
$controllerCurso = new cursos();
if(isset($_GET['legajo'])){
    $legajo = $_GET['legajo'];
    //ver si hay personas inscriptas al curso 
    $controllerPC = new personas_cursos();
    $rta_cursados = $controllerPC->cursoInscripto($legajo);
    if(is_array($rta_cursados)){
        $controllerPC->eliminarCurso($legajo);
    }
    $rta = $controllerCurso->delete($legajo);
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