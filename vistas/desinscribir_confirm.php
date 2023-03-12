<?php 
require_once('../controller/personas_cursos.php');
require_once('../controller/personas.php');
$controllerPersona = new personas();
$persona = $controllerPersona->listar($_POST['dni']);
if(!empty($persona)){
    //la persona existe, hay que realizar la desinscripcion
    $controllerPC = new personas_cursos();
    $rta_anotada = $controllerPC->personaAnotada($_POST['legajo'], $_POST['dni']);
    if($rta_anotada){
        //esta anotado, hay que des anotarlo
        $rta = $controllerPC->eliminar($_POST['dni'], $_POST['legajo']);
        if($rta){
            $url = 'cursos.php?desinscripcion=1';
        }else{
            $url = 'cursos.php?desinscripcion=0';
        }
    }else{
        //no esta anotado
        $url = 'cursos.php?desinscripcion=error';
    }
    
}else{
    $url = 'error';
}
echo json_encode($url);
exit;