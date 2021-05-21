$(function(){

    // Tabla de cliente.php
    $("#registros-cliente").DataTable({
        "pageLength": 10,
        // Ordena la tabla de mayor a menor. 1 = Numero de columna
        "order": [[ 0, "desc" ]],
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

    // Tabla de entrada-salida.php
    $("#registros-entrada-salida").DataTable({
        "pageLength": 10,
        // Ordena la tabla de mayor a menor. 1 = Numero de columna
        "order": [[ 0, "desc" ]],
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

    // Tabla de pago.php
    $("#registros-pago").DataTable({
        // Ordena la tabla de mayor a menor. 1 = Numero de columna
        "order": [[ 0, "desc" ]],
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
    // Del archivo cliente.php
    $('#fecha').datetimepicker({
        locale: 'es',
         format: 'L',
    });

    // Del archivo pago.php
    $('#cobertura_pago').datetimepicker({
        locale: 'es',
         format: 'L',
    });

});