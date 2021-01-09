<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';

// Comprobación de existencia y declaración de variables
if (isset($_POST['email_registro'])) {
    $email_registro = $_POST['email_registro'];
}
if (isset($_POST['password_registro'])) {
    $password_registro = $_POST['password_registro'];
    $opciones = array(
        'cost' => 12
    );
    $password_hashed = password_hash($password_registro, PASSWORD_BCRYPT, $opciones);
}

if (isset($_POST['gimnasio_registro'])) {
    $gimnasio_registro = $_POST['gimnasio_registro'];
}


if (isset($_POST['registro']) && $_POST['registro']  == 'nuevo') {
    try {  
        // php statement
        $stmt = $conn->prepare("INSERT INTO registro (email_registro, password_registro, gimnasio_registro) VALUES (?, ?, ?) ");
        $stmt->bind_param("sss", $email_registro, $password_hashed, $gimnasio_registro);
        $stmt->execute();
        // insert_id es un valor de $stmt
        $id_registro = $stmt->insert_id;
        // En caso de que no haya registro el $id_registro=0
        if ($id_registro > 0) {
            // Iniciamos sesion
            session_start();
            $_SESSION['id'] = $id_registro;
            $_SESSION['email'] = $email_registro;
            $_SESSION['password'] = $password_hashed;
            $respuesta = array(
                'respuesta' => 'exito',
                'id_registro' => $id_registro
            );
        } else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    die(json_encode($respuesta));
}
?>