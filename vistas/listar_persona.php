<?php 
require_once('../controller/personas.php');
$controllerPersonas = new personas();
if(isset($_GET['dni'])){
    if($_GET['dni'] != null && $_GET['dni'] != ''){
        $dni = $_GET['dni'];
        $lista = $controllerPersonas->listar($dni);
    }else{
        $lista = $controllerPersonas->listar();
    }
}else{
    $lista = $controllerPersonas->listar();
}

echo json_encode($lista);
exit;