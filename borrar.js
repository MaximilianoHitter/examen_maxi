var codigo_postal = `<button type="button" class="btn btn-primary" onclick="verPostal(${element.id});">Ver datos</button>`;
codigo_postal += `
                    <div class="modal fade in" id="${element.id}" tabindex="-1" role="dialog" aria-labelledby="${element.id}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Datos Postales</h5>
                                    <button type="button" class="close" data-dismiss="modal" onclick="cerrarModal(${element.id});" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Codigo Postal: ${element.codigoPostal.postalID} 
                                <br>
                                Ciudad: ${element.codigoPostal.ciudad}
                                <br>
                                Departamento: ${element.codigoPostal.departamento}
                                <br>
                                Provincia: ${element.codigoPostal.provincia}
                                <br>
                                Pais: ${element.codigoPostal.pais}
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModal(${element.id});">Close</button>
                        </div>
                    </div>`



ajax: {
    url: '',
    dataSrc: '',
    data: function(d) {
        d.parametro
    }
},