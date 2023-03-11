<?php require_once('../controller/cursos.php');
$controllerCurso = new cursos();
$legajo = $_POST['legajoget'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$modalidad = $_POST['modalidad'];
$rta = $controllerCurso->update($legajo, $nombre, $descripcion, $modalidad);