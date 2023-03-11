<?php require_once('templates/header.php'); ?>
<script src="../assets/ejercicio2.js"></script>

<div class="container col-md-10" style="margin-top:60px;">
    <div class="row">
        <div class="container col-md-4">
            <div class="card " >      
                    <div class="card-body">
                        <h5 class="card-title">Personas</h5>
                        <p class="card-text">ABM de personas</p>
                        <a href="../vistas/personas.php" class="btn btn-primary">Ver Personas</a>
                    </div>
            </div>
        </div>
        <div class="container col-md-4">   
            <div class="card " >       
                <div class="card-body">
                    <h5 class="card-title">Gestion</h5>
                    <p class="card-text">ABM de personas en cursos</p>
                    <a href="../vistas/personas_cursos.php" class="btn btn-primary">Ver inscripciones</a>
                </div>
            </div>   
        </div>
        <div class="container col-md-4">
            <div class="card " >    
                <div class="card-body">
                    <h5 class="card-title">Cursos</h5>
                    <p class="card-text">ABM de cursos</p>
                    <a href="../vistas/cursos.php" class="btn btn-primary">Ver Cursos</a>
                </div>
            </div>   
        </div>
    </div>
</div>

<?php require_once('templates/footer.php'); ?>