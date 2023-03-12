<?php
require_once('../controller/personas_cursos.php');
$modalidad = $_POST['modalidad'];
$controllerPC = new personas_cursos();
$rta = $controllerPC->listar($modalidad);
$contador_hombres = 0;
$contador_mujeres = 0;
$contador_menores = 0;
$contador_mayores = 0;
foreach ($rta as $key => $value) {
    if($value['genero'] == 'Femenino'){
        $contador_mujeres++;
    }elseif($value['genero'] == 'Masculino'){
        $contador_hombres++;
    }
    if($value['edad'] >= 18){
        $contador_mayores++;
    }else{
        $contador_menores++;
    }
}
$respuesta = array('menores'=>$contador_menores, 'mayores'=>$contador_mayores, 'mujeres'=>$contador_mujeres, 'hombres'=>$contador_hombres);
echo json_encode($respuesta);
exit;