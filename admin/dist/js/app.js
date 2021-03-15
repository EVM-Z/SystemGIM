$(function(){

    // Tabla de cliente.php
    $("#registros-cliente").DataTable({
        "pageLength": 10,
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        'language': {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior',
                last: 'Último',
                first: 'Primero'
            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            emptyTable: 'No hay registros',
            infoEmpty: '0 Registros',
            search: 'Buscar: '
        }
    });

    // Tabla de check.php
    $("#registros-entrada-salida").DataTable({
        "pageLength": 10,
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        'language': {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior',
                last: 'Último',
                first: 'Primero'
            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            emptyTable: 'No hay registros',
            infoEmpty: '0 Registros',
            search: 'Buscar: '
        }
    });

    // Categoria Seleccion
    $('.seleccionar').select2();

    // Fecha
    // Del archivo ClientRect.php
    $('#fecha').datetimepicker({
        locale: 'es',
         format: 'L',
    });

    // Del archivo pago.php
    $('#fecha-pago').datetimepicker({
        locale: 'es',
         format: 'L',
    });
});