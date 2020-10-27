<?php

include '../../includes/funciones/conexion.php';

// Comprobación de existencia y declaración de variables
if (isset($_POST['id_registro'])) {
    $id_registro = $_POST['id_registro'];
}
if (isset($_POST['gimnasio'])) {
    $gimnasio = $_POST['gimnasio'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $opciones = array(
        'cost' => 12
    );
    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
}


if (isset($_POST['registro']) && $_POST['registro']  == 'nuevo') {
    try {  
        // php statement
        $stmt = $conn->prepare("INSERT INTO registro (gimnasio, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $gimnasio, $email, $password_hashed);
        $stmt->execute();
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