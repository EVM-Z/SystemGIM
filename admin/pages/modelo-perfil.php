<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';



if ($_POST['registro'] == 'editar') {

    // Comprobación de existencia y declaración de variables
    $id_registro = $_POST['id_registro'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $gimnasio = $_POST['gimnasio'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];

    
    // Directorio donde se guardan las imagenes de los registros
    $directorio = "../dist/img/registros/";
    // is_dir verifica si el directorio existe
    if (!is_dir($directorio)) {
        // Si no existe el directorio, se crea
        mkdir($directorio, 0755, true);
    } else {
        $result = "No se cargo";
    }

    if (move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio . $_FILES['archivo_imagen']['name'])) {
        $imagen_url = $_FILES['archivo_imagen']['name'];
        $imagen_resultado = "Se subió correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }


    try {

        if ($_FILES['archivo_imagen']['size'] > 0 && !empty($_POST['password'])) {
            // Cuando cambian la imagen Y el password no esta vacio
            // OK
            $stmt = $conn->prepare('UPDATE registro SET email_registro = ?, password_registro = ?, gimnasio_registro = ?, nombre_registro = ?, apellido_registro = ?, sexo_registro = ?, url_imagen_registro = ? WHERE id_registro = ? ');
            $stmt->bind_param("sssssssi", $email, $password_hash, $gimnasio, $nombre, $apellido, $sexo, $imagen_url, $id_registro);
        
        
        } elseif ($_FILES['archivo_imagen']['size'] > 0 && empty($_POST['password'])) {
            // Cuando cambian la imagen Y el password esta vacio
            // OK
            $stmt = $conn->prepare('UPDATE registro SET email_registro = ?, gimnasio_registro = ?, nombre_registro = ?, apellido_registro = ?, sexo_registro = ?, url_imagen_registro = ? WHERE id_registro = ? ');
            $stmt->bind_param("ssssssi", $email, $gimnasio, $nombre, $apellido, $sexo, $imagen_url, $id_registro);
        

        } elseif ($_FILES['archivo_imagen']['size'] <= 0 && !empty($_POST['password'])) {
            // Cuando no cambian la imagen Y el password no esta vacio
            // OK
            $stmt = $conn->prepare('UPDATE registro SET email_registro = ?, password_registro = ?, gimnasio_registro = ?, nombre_registro = ?, apellido_registro = ?, sexo_registro = ? WHERE id_registro = ? ');
            $stmt->bind_param("ssssssi", $email, $password_hash, $gimnasio, $nombre, $apellido, $sexo, $id_registro);
        
        
        } elseif ($_FILES['archivo_imagen']['size'] <= 0 && empty($_POST['password'])) {
            // Cuando no cambian la imagen Y el password esta vacio
            // Osea, no hacen ningun cambio :(
            $stmt = $conn->prepare('UPDATE registro SET email_registro = ?, gimnasio_registro = ?, nombre_registro = ?, apellido_registro = ?, sexo_registro = ? WHERE id_registro = ? ');
            $stmt->bind_param("sssssi", $email, $gimnasio, $nombre, $apellido, $sexo, $id_registro);
        }

        $estado = $stmt->execute();
        
        if ($estado == true) {
            // Si se hizo una modificación
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