$(document).ready(function() {
    $('#error').hide();
    $('#tabla_personas').DataTable({
        "ajax": {
            "url": "../controller/personas",
            "contentType": "application/json",
            "type": "GET",
            "async": true,
            "dataSrc": function(response) {
                console.log(response);
                return respuesta;
            }
        }
    });
});