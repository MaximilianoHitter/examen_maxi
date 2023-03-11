<?php 
require_once('../controller/cursos.php');
$controllerCurso = new cursos();
if(isset($_GET['legajo'])){
    $legajo = $_GET['legajo'];
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