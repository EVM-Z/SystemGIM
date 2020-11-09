$(function(){

    // El footer/paginación de DataTables en Español
    $("#registros").DataTable({
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

    // Fecha Evento
    $('#fecha').datetimepicker({
        locale: 'es',
         format: 'L',
    });

});