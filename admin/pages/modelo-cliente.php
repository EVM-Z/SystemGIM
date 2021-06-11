<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';


if ($_POST['registro']  == 'nuevo') {

    // Comprobación de existencia y declaración de variables
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    // Reemplaza los caracteres
    $fecha = str_replace('/', '-', $fecha);
    // Cambiamos la fecha al formato de la BD
    $fecha_formateada = date('Y-m-d', strtotime($fecha));
    $telefono = $_POST['telefono'];
    $gimnasio = $_POST['gimnasio'];


    // Directorio donde se guardan las imagenes de los clientes
    $directorio = "../dist/img/clientes/";
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
        // php statement
        // El id_cliente lo toma del $stmt
        $stmt = $conn->prepare("INSERT INTO cliente (nombre_cliente, apellido_cliente, sexo_cliente, email_cliente, fecha_nacimiento_cliente, telefono_cliente, gimnasio_cliente, url_imagen_cliente, fecha_creacion_cliente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, CURDATE()) ");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $sexo, $email, $fecha_formateada, $telefono, $gimnasio, $imagen_url);
        $stmt->execute();
        // insert_id es un valor de $stmt
        $id_registro = $stmt->insert_id;
        // En caso de que no haya registro el $id_registro=0
        
        if ($id_registro > 0) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_registro' => $id_registro,
                // Variable declarado en move_uploaded_file
                // 'resultado_imagen' => $imagen_resultado
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


if ($_POST['registro']  == 'editar') {

    // Comprobación de existencia y declaración de variables
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    // Reemplaza los caracteres
    $fecha = str_replace('/', '-', $fecha);
    // Cambiamos la fecha al formato de la BD
    $fecha_formateada = date('Y-m-d', strtotime($fecha));
    $telefono = $_POST['telefono'];
    $gimnasio = $_POST['gimnasio'];


    // Directorio donde se guardan las imagenes de los clientes
    $directorio = "../dist/img/clientes/";
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
        if ($_FILES['archivo_imagen']['size'] > 0) {
            // Cuando cambian la imagen
            $stmt = $conn->prepare('UPDATE cliente SET nombre_cliente = ?, apellido_cliente = ?, email_cliente = ?, fecha_nacimiento_cliente = ?, telefono_cliente = ?, gimnasio_cliente = ?, url_imagen_cliente = ? WHERE id_cliente = ? ');
            $stmt->bind_param("sssssisi", $nombre, $apellido, $email, $fecha_formateada, $telefono, $gimnasio, $imagen_url, $id_cliente);
        } else {
            // Cuando no cambian la imagen
            $stmt = $conn->prepare('UPDATE cliente SET nombre_cliente = ?, apellido_cliente = ?, email_cliente = ?, fecha_nacimiento_cliente = ?, telefono_cliente = ?, gimnasio_cliente = ? WHERE id_cliente = ? ');
            $stmt->bind_param("sssssii", $nombre, $apellido, $email, $fecha_formateada, $telefono, $gimnasio, $id_cliente);
        }

        $estado = $stmt->execute();
        
        if ($estado == true) {
            // Si se hizo una modificación
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $id_cliente
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    die(json_encode($respuesta));
    
}


if ($_POST['registro']  == 'eliminar'){

    $id_borrar = $_POST['id'];
    
    try {
        $stmt = $conn->prepare('DELETE FROM cliente WHERE id_cliente = ? ');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if ($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}
?>