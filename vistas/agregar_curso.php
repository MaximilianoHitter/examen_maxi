<?php require_once('templates/header.php') ?>
<script src="../assets/agregar_curso.js"></script>
<div class="container col-md-8 " style="background-color: #d6d3cc;">
<?php if(isset($_GET['error'])){
    if($_GET['error'] == 'duplicado'){
        echo '<div class="alert alert-danger" role="alert">
        Ya existe un curso con dicho Legajo.
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
} ?>
<form action="store_curso.php" method="POST">
    <div class="form-group">
        <label for="legajo">Legajo:</label>
        <input type="number" class="form-control" id="legajo" name="legajo">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>
    <div class="form-group">
        <label for="modalidad">Modalidad</label>
        <input type="text" class="form-control" id="modalidad" name="modalidad">
    </div>
  <button class="btn btn-primary" type="submit">Añadir</button>
  <a type="button" href="cursos.php" class="btn btn-danger">Cancelar</a>
</form>
</div>
<?php require_once('templates/footer.php') ?>