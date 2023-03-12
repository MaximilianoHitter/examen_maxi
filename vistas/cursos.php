<?php require_once('templates/header.php');?>
<script src="../assets/cursos.js"></script>
<div class="container col-md-8 " style="background-color: #d6d3cc;">
    <?php 
        if(isset($_GET['inscribir'])){
            if($_GET['inscribir'] == 0){
                echo '<div class="alert alert-danger" role="alert">
                Ha habido un problema durante la inscripcion.
                </div>';
            }elseif($_GET['inscribir'] == 1){
                echo '<div class="alert alert-success" role="alert">
                Se ha inscripto la persona al curso.
                </div>';
            }
        }
        if(isset($_GET['error']) && $_GET['error'] == 'inscripcion'){
            echo '<div class="alert alert-warning" role="alert">
            La persona ya se encuentra inscripta al curso.
          </div>';
        }elseif(isset($_GET['error']) && $_GET['error'] == 'modalidad'){
            echo '<div class="alert alert-danger" role="alert">
            Esta persona ya está inscripta en la otra modalidad.
          </div>';
        }
        if(isset($_GET['desinscripcion'])){
            if($_GET['desinscripcion'] == 0){
                echo '<div class="alert alert-danger" role="alert">
            No se ha podido eliminar a la persona del curso.
            </div>';
            }elseif($_GET['desinscripcion'] == 1){
                echo '<div class="alert alert-success" role="alert">
            Se ha desinscripto a la persona.
          </div>';
            }elseif($_GET['desinscripcion'] == 'error'){
                echo '<div class="alert alert-warning" role="alert">
            La persona no esta anotada en el curso.
          </div>';
            }
        }
        ?>
    <a type="button" href="agregar_curso.php" class="btn btn-primary" id="add">Agregar Curso</a>
    <table class="table table-dark" id="tabla_cursos">
        <thead>
            <tr>
                <th width="10">Legajo</th>
                <th width="60">Nombre</th>
                <th width="150">Descripcion</th>
                <th width="50">Modalidad</th>
                <th width="170">Acciones</th>
            </tr>
        </thead>
        <tbody>   
        </tbody>
        <tfoot>
            <tr>
                <th>Legajo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Modalidad</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php require_once('templates/footer.php'); ?>