<?php require_once('templates/header.php') ?>

<div class="container col-md-8 " style="background-color: #d6d3cc;">
<?php if(isset($_GET['error'])){
    if($_GET['error'] == 'duplicado'){
        echo '<div class="alert alert-danger" role="alert">
        Ya existe una persona con dicho DNI.
      </div>';
    }elseif($_GET['error'] == 'nulo'){
        echo '<div class="alert alert-danger" role="alert">
        Todos los campos son requeridos.
      </div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
        Ha ocurrido un error durante la carga.
      </div>';
    }
}
    
 ?>
<script src="../assets/editar_persona.js"></script>
<form action="edit_persona.php" method="POST">
    <?php 
        if(isset($_GET['dni'])){
            $dniGet = $_GET['dni'];
            echo '<input type="hidden" value="'.$dniGet.'" id="dniget" name="dniget">';
        }
    ?>
    <div class="form-group">
        <label for="dni">DNI:</label>
        <input type="number" class="form-control" id="dni" name="dni">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
    <div class="form-group">
        <label for="genero">Genero</label>
        <input type="text" class="form-control" id="genero" name="genero">
    </div>
    <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad">
    </div>
  <button class="btn btn-primary" type="submit">Guardar</button>
  <a type="button" href="personas.php" class="btn btn-danger">Cancelar</a>
</form>
</div>
<?php require_once('templates/footer.php') ?>