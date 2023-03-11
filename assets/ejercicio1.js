$(document).ready(function() {
    /* let tabla = $('#tabla_datos').DataTable({});  */
    $('#cruz').on('click', function() {
        $('#myModal').modal('hide');
    })

    $('#close').on('click', function() {
        $('#myModal').modal('hide');
    })

    $('#reload').on('click', function() {
        cargar();
    })

    cargar();

})

function cargar() {
    $.ajax({
        url: 'https://weblogin.muninqn.gov.ar/api/Examen',
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            var datos = json;
            if (json.error == null) {
                datos = json.value;
                var salida = [];
                datos.forEach(element => {
                    var fila = [];
                    var genero = element.genero.value;
                    var codigo_postal = `<button type="button" class="btn btn-primary" onclick="verPostal(${element.codigoPostal.postalID}, '${element.codigoPostal.ciudad}', '${element.codigoPostal.departamento}', '${element.codigoPostal.provincia}', '${element.codigoPostal.pais}');">Ver datos</button>`;
                    var fechaNac = element.fechaNacimiento.split('T');
                    var fecha = fechaNac[0]
                    fila.push(element.id, element.dni, element.razonSocial, element.domicilio, genero, codigo_postal, fecha);
                    salida.push(fila);
                });
                generar_datatable(salida);

            } else {
                alert('Fallo la consulta.');
            }
        },

    });
}


function generar_datatable(salida) {
    $('#tabla_datos').DataTable().destroy();
    var tabla = $('#tabla_datos').DataTable({
        data: salida,
        responsive: true,
        "language": {
            "decimal": ",",
            "thousands": ".",
            "search": "Buscar: ",
            "lengthMenu": "Mostrar MENU elementos por página",
            "zeroRecords": "Sin resultados",
            "info": "Mostrando _PAGE_ de _PAGES_ páginas",
            "infoEmpty": "No se encontraron elementos",
            "infoFiltered": "(filtrado de MAX total elementos)",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "lengthMenu": [
            [10, 50, -1],
            [10, 50, "Todos"]
        ],
        dom: 'frtipB',
    })

}


function verPostal(postalId, ciudad, departamento, provincia, pais) {
    $('#codigo').text(postalId);
    $('#ciudad').text(ciudad);
    $('#departamento').text(departamento);
    $('#provincia').text(provincia);
    $('#pais').text(pais);
    $('#myModal').modal('show');
}