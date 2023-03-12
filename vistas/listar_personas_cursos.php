<?php 
require_once('../controller/personas_cursos.php');
$modalidad = $_GET['modalidad'];
$controllerPC = new personas_cursos();
$rta = $controllerPC->listar($modalidad);
echo json_encode($rta);
exit;