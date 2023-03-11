$(document).ready(function() {
    traer_datos($('#dniget').val());
})

function traer_datos(dniGet) {
    $.ajax({
        url: 'listar_persona.php?dni=' + dniGet,
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            if (json != null) {
                var datos = json[0];
                $('#dni').val(datos[0]);
                $('#dni').attr('disabled', true);
                $('#nombre').val(datos[1]);
                $('#apellido').val(datos[2]);
                $('#genero').val(datos[3]);
                $('#edad').val(datos[4]);
            } else {
                alert('Fallo la consulta.');
            }
        },

    });

}