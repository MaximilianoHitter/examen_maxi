<?php require_once('../controller/personas.php');
$controllerPersona = new personas();
$dni = $_POST['dniget'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];
$rta = $controllerPersona->update($dni, $nombre, $apellido, $genero, $edad);