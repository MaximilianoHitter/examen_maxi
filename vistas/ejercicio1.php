<?php require_once('templates/header.php') ?>
<script src="../assets/ejercicio1.js"></script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos Postales</h5>
        <button type="button" class="close" data-dismiss="modal" id="cruz" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Codigo Postal: <span id="codigo"></span></p>
        <p>Ciudad: <span id="ciudad"></span></p>
        <p>Departamento: <span id="departamento"></span></p>
        <p>Provincia: <span id="provincia"></span></p>
        <p>Pais: <span id="pais"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="container col-md-8 " style="background-color: #d6d3cc;">
    <button type="button" class="btn btn-primary" id="reload">Recargar Tabla</button>
    <table class="table table-dark" id="tabla_datos">
        <thead>
            <tr>
                <th width="30">Id</th>
                <th width="50">DNI</th>
                <th width="100">Nombre</th>
                <th width="150">Domicilio</th>
                <th width="80">Genero</th>
                <th width="50">Datos Postales</th>
                <th width="80">Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>   
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Genero</th>
                <th>Datos Postales</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </tfoot>
    </table>
</div>
    
<?php  require_once('templates/footer.php')?>