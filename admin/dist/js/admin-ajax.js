$(document).ready(function() {
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