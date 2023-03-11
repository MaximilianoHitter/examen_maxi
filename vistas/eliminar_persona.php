<?php 
require_once('../controller/personas.php');
$controllerPersona = new personas();
if(isset($_GET['dni'])){
    $dni = $_GET['dni'];
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