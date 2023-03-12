<?php 
require_once('../controller/personas_cursos.php');
$controllerPC = new personas_cursos();
/* if(isset($_GET['legajo'])){
    if($_GET['legajo'] != null && $_GET['legajo'] != ''){
        $legajo = $_GET['legajo'];
        $lista = $controllerCursos->listar($legajo);
    }else{
        $lista = $controllerCursos->listar();
    }
}else{
    $lista = $controllerCursos->listar();
} */
$lista = $controllerPC->listar();
echo json_encode($lista);
exit;