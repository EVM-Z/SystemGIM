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


if (isset($_POST['login'])) {

    try {
        // php statement
        $stmt = $conn->prepare("SELECT * FROM registro WHERE email_registro = ?;");
        $stmt->bind_param("s", $email_registro);
        $stmt->execute();
        $stmt->bind_result($id_registro, $email_registro, $password_registro);
        if ($stmt->affected_rows) {
            $existe = $stmt->fetch();
            if($existe){
                // Si el usuario existe
                if (password_verify($password_registro, $password_admin)) {
                    session_start();
                    $_SESSION['usuario'] = $usuario_admin;
                    $_SESSION['nombre'] = $nombre_admin;
                    $_SESSION['nivel'] = $nivel;
                    $_SESSION['id'] = $id_admin;
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'usuario' => $nombre_admin
                    );
                } else{
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