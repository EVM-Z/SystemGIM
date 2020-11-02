<?php

include 'funciones/funciones.php';

// Comprobación de existencia y declaración de variables
if (isset($_POST['id_registro'])) {
    $id_registro = $_POST['id_registro'];
}
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


if (isset($_POST['guardar']) && $_POST['guardar']  == 'nuevo') {
    try {  
        // php statement
        $stmt = $conn->prepare("INSERT INTO registro (email_registro, password_registro, gimnasio_registro) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email_registro, $password_hashed, $gimnasio_registro);
        $stmt->execute();
        // insert_id es un valor de $stmt
        $id_registro = $stmt->insert_id;
        // En caso de que no haya registro el $id_registro=0
        if ($id_registro > 0) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_admin' => $id_registro
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