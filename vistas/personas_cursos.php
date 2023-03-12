<?php require_once('templates/header.php');?>
<script src="../assets/personas_cursos.js"></script>
<div class="container col-md-8 " style="background-color: #d6d3cc; padding-top: 10px; padding-bottom: 10px;">
    <div class="card">
        <div class="card-header">
            Cursos Individuales
        </div>
        <div class="card-body">
            <p>
                <ul>
                    <li>Mujeres Inscriptas: <span id="mujeres_individual">0</span></li>
                    <li>Hombre Inscriptos: <span id="hombres_individual">0</span></li>
                    <li>Menores Inscriptos: <span id="menores_individual">0</span></li>
                    <li>Mayores Inscriptos: <span id="mayores_individual">0</span></li>
                </ul>
            </p>
            <table class="table table-dark" id="tabla_personas_cursos_individuales">
            <thead>
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Fecha</th>
                    <th>Legajo</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>   
            </tbody>
            <tfoot>
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Fecha</th>
                    <th>Legajo</th>
                    <th>Curso</th>
                </tr>
            </tfoot>
            </table>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            Cursos Grupales
        </div>
        <div class="card-body">
            <p>
                <ul>
                    <li>Mujeres Inscriptas: <span id="mujeres_grupal">0</span></li>
                    <li>Hombre Inscriptos: <span id="hombres_grupal">0</span></li>
                    <li>Menores Inscriptos: <span id="menores_grupal">0</span></li>
                    <li>Mayores Inscriptos: <span id="mayores_grupal">0</span></li>
                </ul>
            </p>
            <table class="table table-dark" id="tabla_personas_cursos_grupales">
            <thead>
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Fecha</th>
                    <th>Legajo</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>   
            </tbody>
            <tfoot>
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Fecha</th>
                    <th>Legajo</th>
                    <th>Curso</th>
                </tr>
            </tfoot>
            </table>
        </div>
    </div>
</div>


<?php require_once('templates/footer.php'); ?>