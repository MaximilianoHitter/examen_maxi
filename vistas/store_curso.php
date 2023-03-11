<?php 
require_once('../controller/cursos.php');
$cursosController = new cursos();
$cursosController->insertar($_POST['legajo'], $_POST['nombre'], $_POST['descripcion'], $_POST['modalidad']);