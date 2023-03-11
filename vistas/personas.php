<?php require_once('templates/header.php');?>
<script src="../assets/personas.js"></script>
<div class="container col-md-8 " style="background-color: #d6d3cc;">
    <a type="button" href="agregar_persona.php" class="btn btn-primary" id="add">Agregar Persona</a>
    <table class="table table-dark" id="tabla_personas">
        <thead>
            <tr>
                <th width="30">DNI</th>
                <th width="100">Nombre</th>
                <th width="150">Apellido</th>
                <th width="80">Genero</th>
                <th width="50">Edad</th>
                <th width="100">Acciones</th>
            </tr>
        </thead>
        <tbody>   
        </tbody>
        <tfoot>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th0>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php require_once('templates/footer.php'); ?>