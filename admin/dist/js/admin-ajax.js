$(document).ready(function() {

    // Se ejecuta en registro.php
    $('#guardar-registro-inicio').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        // serializeArray() justa todos los datos en un arreglo
        var datos = $(this).serializeArray();
        $.ajax({
            // Lee el method="POST"
            type: $(this).attr('method'),
            data: datos,
            // La URL del formulario action="modelo-nuevo.php"
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    // Mensaje en popup
                    // Swal.fire(
                    //     'OK',
                    //     'Registro guardado',
                    //     'success'
                    // )
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 500);
                } else {
                    Swal.fire(
                        'Error',
                        'Vuelva a ingresar sus datos',
                        'error'
                    )
                }
                // Limpia el formulario
                $('#guardar-registro-inicio')[0].reset();
                
            }
        });
    });

    // Se ejecuta dentro del AdminLTE
    $('#guardar-registro').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        // serializeArray() justa todos los datos en un arreglo
        var datos = $(this).serializeArray();
        $.ajax({
            // Lee el method="POST"
            type: $(this).attr('method'),
            data: datos,
            // La URL del formulario action="modelo-nuevo.php"
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    // Mensaje en popup
                    Swal.fire(
                        'OK',
                        'Registro guardado',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error',
                        'Vuelva a ingresar sus datos',
                        'error'
                    )
                }
                // Limpia el formulario
                $('#guardar-registro')[0].reset();
            }
        });
    });

    // Se ejecuta en entrada-salida.php
    $('#guardar-registro-entrada-salida').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        // serializeArray() justa todos los datos en un arreglo
        var datos = $(this).serializeArray();
        $.ajax({
            // Lee el method="POST"
            type: $(this).attr('method'),
            data: datos,
            // La URL del formulario action="modelo-nuevo.php"
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    // Limpia el formulario
                    $('#guardar-registro-entrada-salida')[0].reset();
                    // Mensaje en popup
                    Swal.fire(
                        'OK',
                        'Registro guardado',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error',
                        'Vuelva a ingresar sus datos',
                        'error'
                    )
                }
                
            }
        });
    });

    // Se ejecuta en pago.php
    $('#guardar-registro-pago').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        // serializeArray() justa todos los datos en un arreglo
        var datos = $(this).serializeArray();
        $.ajax({
            // Lee el method="POST"
            type: $(this).attr('method'),
            data: datos,
            // La URL del formulario action="modelo-nuevo.php"
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    // Limpia el formulario
                    $('#guardar-registro-pago')[0].reset();
                    // Mensaje en popup
                    Swal.fire(
                        'OK',
                        'Pago guardado',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error',
                        'Vuelva a ingresar sus datos',
                        'error'
                    )
                }
                
            }
        });
    });

    // Se ejecuta cuando hay un archivo
    $('#guardar-registro-archivo').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        // Crea un nuevo form con los valores
        var datos = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            // Propiedas a agregar cuando se usa archivos
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    // Limpia el formulario
                    $('#guardar-registro-archivo')[0].reset();
                    // Mensaje en popup
                    Swal.fire(
                        'OK',
                        'Se guardó correctamente',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error',
                        'Hubo un error.',
                        'error'
                    )
                }
            }
        });
    });

    // Se ejecuta cuando hay un archivo
    $('#guardar-registro-cliente').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        // Crea un nuevo form con los valores
        var datos = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            // Propiedas a agregar cuando se usa archivos
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    // Limpia el formulario
                    $('#guardar-registro-cliente')[0].reset();
                    // Mensaje en popup
                    Swal.fire(
                        'OK',
                        'Se guardó correctamente',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Error',
                        'Hubo un error.',
                        'error'
                    )
                }
            }
        });
    });


    // Eliminar un registro
    $('.borrar_registro').on('click', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();

        // Creamos nuestros valores de los campos
        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');

        Swal.fire({
            title: '¿Estás Seguro?',
            text: "Un registro eliminado no se puede recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                // Llamado a AJAX
                $.ajax({
                    type: 'post',
                    data: {
                        // Datos que se estan mandando
                        'id': id,
                        'registro': 'eliminar'
                    },
                    url: 'modelo-' + tipo + '.php',
                    success: function(data) {
                        console.log(data);
                        var resultado = JSON.parse(data);
                        if (resultado.respuesta == 'exito') {
                            Swal.fire(
                                'Eliminado',
                                'El registro ha sido eliminado',
                                'success'
                            )
                            jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove();
                        } else {
                            Swal(
                                'Error',
                                'No se pudo eliminar',
                                'error'
                            )
                        }
                    }
                })
            }
        })
    });

    // Se ejecuta en el login.php
    $('#login').on('submit', function(e) {
        // Evitamos que se habran los modelos.php desde el formulario
        e.preventDefault();
        // Obtener los datos
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta == 'exitoso') {
                    // Swal.fire(
                    //     'Login Correcto',
                    //     'Bievenid@',
                    //     'success'
                    // )
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 500);
                } else {
                    Swal.fire(
                        'Error',
                        'Usuario o Password Incorrecto',
                        'error'
                    )
                }
                // Limpia el formulario
                $('#login')[0].reset();
            }
        });
    });

    
});