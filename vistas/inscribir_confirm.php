<?php 
require_once('../controller/cursos.php');
require_once('../controller/personas_cursos.php');
require_once('../controller/personas.php');
$controllerCurso = new cursos();
//comprobar si la persona existe 
$controllerPersona = new personas();
$persona = $controllerPersona->listar($_POST['dni']);
if(!empty($persona)){
    //datos del curso al que se quiere inscribir
    $datosCurso = $controllerCurso->listar($_POST['legajo']);
    $controllerPC = new personas_cursos();
    //para saber si ya estado anotado al curso 
    $rta = $controllerPC->personaAnotada($_POST['legajo'], $_POST['dni']);
    if($rta){
        //ya esta anotado, hay que devolver mensaje
        $url = 'inscribir.php?legajo='.$datosCurso[0][0].';error=inscripcion';
        //header('Location:inscribir.php?legajo='.$datosCurso[0][0].';error=inscripcion');
    }else{
        //no esta anotado, hay que comprobar si esta en la otra modalidad 
        //traer info del otro curso si lo hay 
        $otroCurso = $controllerCurso->buscar($datosCurso[0][1], $datosCurso[0][3]);
        if(is_array($otroCurso)){
            //hay datos de otro curso
            $modalidad = $controllerPC->personaAnotada($otroCurso['legajo'], $_POST['dni']);
            if($modalidad){
                //esta anotado en la otra modalidad
                $url = 'cursos.php?error=modalidad';
                //header('Location:inscribir.php?legajo='.$datosCurso[0][0].';error=modalidad');
            }else{
                //hay que dejarlo inscribirse
                $inscripcion = $controllerPC->inscribir($datosCurso[0][0], $_POST['dni']);
                if($inscripcion){
                    $url = 'cursos.php?inscribir=1';
                    //header('Location:cursos.php?inscribir=1');
                }else{
                    $url = 'cursos.php?inscribir=0';
                    //header('Location:cursos.php?inscribir=0');
                }
            }
        }else{
            //no existe la otra modalidad
            //hay que dejarlo inscribirse
            $inscripcion = $controllerPC->inscribir($datosCurso[0][1], $_POST['dni']);
            if($inscripcion){
                $url = 'cursos.php?inscribir=1';
                //header('Location:cursos.php?inscribir=1');
            }else{
                $url = 'cursos.php?inscribir=0';
                //header('Location:cursos.php?inscribir=0');
            }
        }
        
    }

}else{
    $url = 'error';
}
echo json_encode($url);
exit;