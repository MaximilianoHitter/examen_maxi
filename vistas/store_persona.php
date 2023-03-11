<?php 
require_once('../controller/personas.php');
$personasController = new personas();
$personasController->insertar($_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['genero'], $_POST['edad']);

