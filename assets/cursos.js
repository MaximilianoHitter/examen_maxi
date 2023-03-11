$(document).ready(function() {
    var tabla = $('#tabla_cursos').DataTable({
        ajax: {
            url: 'listar_curso.php',
            dataSrc: ''
        },
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
        dom: 'frtipB'
    })

})

function eliminar(legajo) {
    $.ajax({
        url: 'eliminar_curso.php?legajo=' + legajo,
        type: 'GET',
        dataType: 'json',
        success: function(json) {
            window.location.reload();
        },
    });
}