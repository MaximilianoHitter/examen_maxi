$(document).ready(function() {
    $('#error').hide();
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
                $('#nombre').attr('disabled', true);
                $('#descripcion').val(datos[2]);
                $('#descripcion').attr('disabled', true);
                $('#modalidad').val(datos[3]);
                $('#modalidad').attr('disabled', true);
            } else {
                alert('Fallo la consulta.');
            }
        },

    });

}

function enviar_form() {
    $.ajax({
        url: 'inscribir_confirm.php',
        type: 'POST',
        data: { legajo: $('#legajoget').val(), dni: $('#dni').val() },
        dataType: 'json',
        success: function(json) {
            if (json == 'error') {
                $('#error').show();
            } else {
                window.location = json;
            }
        }
    })
}