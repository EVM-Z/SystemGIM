$(document).ready(function() {
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
                    Swal.fire(
                        'OK',
                        'Registro guardado',
                        'success'
                    )
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 2000);
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

    // Se ejecuta cuando hay un archivo
    $('#guardar-registro-archivo').on('submit', function(e) {
        // Evitamos que se habra el archivo insertar-admin.php desde el formulario crear-admin.php
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
                // Limpia el formulario
                $('#guardar-registro-archivo')[0].reset();
            }
        });
    });

    $('#login').on('submit', function(e) {
        // Evitamos que se habra el archivo insertar-admin.php desde el formulario crear-admin.php
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
                    Swal.fire(
                        'Login Correcto',
                        'Bievenid@',
                        'success'
                    )
                    setTimeout(function() {
                        window.location.href = 'dashboard.php';
                    }, 2000);
                } else {
                    Swal.fire(
                        'Error',
                        'Usuario o Password Incorrecto',
                        'error'
                    )
                }
            }
        });
    });

    
});