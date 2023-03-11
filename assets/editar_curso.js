$(document).ready(function() {
    traer_datos($('#legajoget').val());
})

function traer_datos(legajoGet) {
    $.ajax({
        url: 'listar_curso.php?legajo=' + legajoGet,
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            if (json != null) {
                var datos = json[0];
                $('#legajo').val(datos[0]);
                $('#legajo').attr('disabled', true);
                $('#nombre').val(datos[1]);
                $('#descripcion').val(datos[2]);
                $('#modalidad').val(datos[3]);
            } else {
                alert('Fallo la consulta.');
            }
        },

    });

}