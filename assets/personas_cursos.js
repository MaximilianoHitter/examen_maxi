$(document).ready(function() {
    var tabla = $('#tabla_personas_cursos_individuales').DataTable({
        ajax: {
            url: 'listar_personas_cursos.php?modalidad=Individual',
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
    });

    var tabla = $('#tabla_personas_cursos_grupales').DataTable({
        ajax: {
            url: 'listar_personas_cursos.php?modalidad=Grupal',
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

    cargar_cantidades('Individual', 'individual');
    cargar_cantidades('Grupal', 'grupal');
})

function cargar_cantidades(modalidad, selector) {
    $.ajax({
        url: 'cantidades.php',
        type: 'POST',
        data: { modalidad: modalidad },
        dataType: 'json',
        success: function(json) {
            $('#menores_' + selector).text(json.menores);
            $('#mayores_' + selector).text(json.mayores);
            $('#hombres_' + selector).text(json.hombres);
            $('#mujeres_' + selector).text(json.mujeres);
        }
    })
}