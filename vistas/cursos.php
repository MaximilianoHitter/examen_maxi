<?php require_once('templates/header.php');?>
<script src="../assets/cursos.js"></script>
<div class="container col-md-8 " style="background-color: #d6d3cc;">
    <a type="button" href="agregar_curso.php" class="btn btn-primary" id="add">Agregar Curso</a>
    <table class="table table-dark" id="tabla_cursos">
        <thead>
            <tr>
                <th width="30">Legajo</th>
                <th width="100">Nombre</th>
                <th width="150">Descripcion</th>
                <th width="80">Modalidad</th>
                <th width="80">Acciones</th>
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