<?php
include 'funciones/funciones.php';

// Comprobación de existencia y declaración de variables
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}


if (isset($_POST['login'])) {
    try {
        // php statement
        $stmt = $conn->prepare("SELECT id_registro, email_registro, password_registro FROM registro WHERE email_registro = ?;");
        // Información que manda el usuario en el frontend
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // bind_result -> Sirve para consultar la BD con el SELECT y para que despues nos devuelva un valor
        $stmt->bind_result($id_registro, $email_registro, $password_registro);
        if ($stmt->affected_rows) {
            $existe = $stmt->fetch();
            if($existe){
                // password_verify() es para mandar la contraseña, hashear y luego comparar con el que esta en la BD
                // Dos parametros, 1. password que escribe el usuario 2. password que recibe de la BD
                if (password_verify($password, $password_registro)) {
                    // Iniciamos sesion
                    session_start();
                    $_SESSION['email'] = $email_registro;
                    $_SESSION['password'] = $password_registro;
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                    );
                } else {
                    $respuesta = array(
                        'respuesta' => 'error'
                    );
                }
            } else{
                // Si el usuario no existe
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        }
        // Cerramos las conexiones
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error:" . $e->getMessage();
    }

    die(json_encode($respuesta));
}

?>