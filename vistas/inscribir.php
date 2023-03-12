<?php require_once('templates/header.php') ?>

<div class="container col-md-8 " style="background-color: #d6d3cc;">
<script src="../assets/inscribir.js"></script>
<form method="POST">
    <div class="alert alert-danger" role="alert" id="error">
        No existe dicha persona.
    </div>
    <?php 
        if(isset($_GET['legajo'])){
            $legajoGet = $_GET['legajo'];
            echo '<input type="hidden" value="'.$legajoGet.'" id="legajoget" name="legajoget">';
        }
        /* if(isset($_GET['error']) && $_GET['error'] == 'modalidad'){
            echo '<div class="alert alert-danger" role="alert">
            Esta persona ya está inscripta en la otra modalidad.
          </div>';
        } */
    ?>
    <h3>Ingrese el DNI de la persona a Inscribir</h3>
    <div class="form-group">
        <label for="dni">DNI:</label>
        <input type="number" class="form-control" id="dni" name="dni">
    </div>
    <h3>Datos del Curso elegido:</h3>
    <div class="form-group">
        <label for="nombre">Legajo:</label>
        <input type="text" class="form-control" id="legajo">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion">
    </div>
    <div class="form-group">
        <label for="modalidad">Modalidad</label>
        <input type="text" class="form-control" id="modalidad" >
    </div>
  <button class="btn btn-primary" type="button" onclick="enviar_form();">Inscribir</button>
  <a type="button" href="cursos.php" class="btn btn-danger">Cancelar</a>
</form>
</div>
<?php require_once('templates/footer.php') ?>