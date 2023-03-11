<?php 
require_once('../controller/cursos.php');
$controllerCursos = new cursos();
if(isset($_GET['legajo'])){
    if($_GET['legajo'] != null && $_GET['legajo'] != ''){
        $legajo = $_GET['legajo'];
        $lista = $controllerCursos->listar($legajo);
    }else{
        $lista = $controllerCursos->listar();
    }
}else{
    $lista = $controllerCursos->listar();
}

echo json_encode($lista);
exit;