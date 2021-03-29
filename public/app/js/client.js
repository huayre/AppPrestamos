var table = $('#clients').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": base_url + '/datatableclient',
    columns: [
        {data: 'item', name: 'item'},
        {data: 'name', name: 'name'},
        {data: 'type_document', name: 'type_document'},
        {data: 'number_document', name: 'number_document'},
        {data: 'sex', name: 'sex'},
        {data: 'phone', name: 'phone'},
        {data: 'action', name: 'action', orderable: false, searchable: false}
    ],
    language: {
        search: '<span class="text-info"><i class="fas fa-search"></i></span>_INPUT_',
        lengthMenu: '<i class="fas fa-align-justify text-primary"></i> _MENU_',
        emptyTable: "No existen registros",
        sZeroRecords: "No se encontraron resultados",
        sInfoEmpty: "No existen registros que contabilizar",
        sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
        sInfo: "Mostrando del registro _START_ al _END_ de un total de _TOTAL_ datos",
        paginate: {'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;'},
        processing: '<div class="spinner-border text-info" role="status"><span class="sr-only"></span></div>'
    }
});

table.on('order.dt search.dt', function () {
    table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
        cell.innerHTML = '<span class="badge badge-pill badge-dark">' + (i + 1) + '</span>';
    });
}).draw();


function crearCliente() {
    $('#title_form').text('NUEVO CLIENTE');
    $('#form_client').trigger('reset');
    $('#modalcrearcliente').modal('show');

}

function guardarCliente() {
    if (!validarFormularioCliente()) {
        if (!$('#id').val()) {
            $.ajax({
                type: 'post',
                url: base_url + '/client',
                data: $('#form_client').serialize(),
                datatype: 'json',
                success: function (data) {
                    if (data.result == 'success') {
                        $('#modalcrearcliente').modal('hide');
                        table.draw();
                        Swal.fire({
                            title: 'Correcto!',
                            text: "El Cliente fue creado correctamente!",
                            icon: 'success'
                        });

                    } else {

                        Swal.fire({
                            title: 'Error!',
                            text: "Consulte con el encargado!",
                            icon: 'error'
                        });
                    }

                }
            });
        } else {
            id_cliente = $('#id').val();
            $.ajax({
                type: 'put',
                url: base_url + '/client/' + id_cliente,
                data: $('#form_client').serialize(),
                datatype: 'json',
                success: function (data) {
                    if (data.result == 'success') {
                        $('#modalcrearcliente').modal('hide');
                        table.draw();
                        Swal.fire({
                            title: 'Correcto!',
                            text: "El Cliente fue actualizado correctamente!",
                            icon: 'success'
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: "Consulte con el encargado!",
                            icon: 'error'
                        });
                    }

                }
            });
        }
    }

}


function editarCliente(idCliente) {
    $('#form_client').trigger('reset');
    $.get(base_url + '/client/' + idCliente, function (data) {
        $('#type_document').val(data.type_document);
        $('#number_document').val(data.number_document);
        $('#firstname').val(data.firstname);
        $('#lastname').val(data.lastname);
        $('#sex').val(data.sex);
        $('#direction').val(data.direction);
        $('#phone').val(data.phone);
        $('#occupation').val(data.occupation);
        $('#id').val(data.id);
        $('#title_form').text('EDITAR CLIENTE');
    })
    $('#modalcrearcliente').modal('show');

}


function eliminarCliente(idCliente) {
    Swal.fire({
        title: '¿Está seguro?',
        text: '¡No podrás revertir esto!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, bórralo!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'delete',
                url: base_url + '/client/' + idCliente,
                datatype: 'json',
                success: function (data) {
                    if (data.result == 'success') {
                        table.draw();
                        Swal.fire({
                            title: 'Correcto!',
                            text: "El cliente se ha eliminado.!",
                            icon: 'success'
                        });
                    }
                }
            });
        }
    })
}

let bandera = false;

function validarFormularioCliente() {

    if ($('#type_document').val() == null) {
        toastr.error('Seleccione el tipo de documento')
        $('#type_document').focus();
        return bandera = true;
    }
    if ($('#number_document').val() == '') {
        toastr.error('Ingrese el número de documento')
        $('#number_document').focus();
        return bandera = true;
    }
    if ($('#firstname').val() == '') {
        toastr.error('Ingrese el nombre del cliente')
        $('#firstname').focus();
        return bandera = true;
    }
    if ($('#lastname').val() == '') {
        toastr.error('Ingrese el apellido del cliente')
        $('#lastname').focus();
        return bandera = true;
    }
    if ($('#sex').val() == null) {
        toastr.error('Seleccione el sexo')
        $('#sex').focus();
        return bandera = true;
    }
    if ($('#direction').val() == '') {
        toastr.error('Ingrese la direccion de domicilio')
        $('#direction').focus();
        return bandera = true;
    }
    if ($('#phone').val() == '') {
        toastr.error('Ingrese el número de telefono o celular')
        $('#phone').focus();
        return bandera = true;
    }
    if ($('#occupation').val() == '') {
        toastr.error('Ingrese la ocupación del cliente')
        $('#occupation').focus();
        return bandera = true;
    }

}
