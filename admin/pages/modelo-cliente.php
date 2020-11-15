<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';

// Comprobación de existencia y declaración de variables
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if (isset($_POST['apellido'])) {
    $apellido = $_POST['apellido'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['fecha'])) {
    $fecha = $_POST['fecha'];
}
// Reemplaza los caracteres
$fecha = str_replace('/', '-', $fecha);
// Cambiamos la fecha al formato de la BD
$fecha_formateada = date('Y-m-d', strtotime($fecha));

if (isset($_POST['telefono'])) {
    $telefono = $_POST['telefono'];
}

if (isset($_POST['gimnasio'])) {
    $gimnasio = $_POST['gimnasio'];
}

    
// $nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];
// $email = $_POST['email'];
// $telefono = $_POST['telefono'];
// $fecha = $_POST['fecha'];
// Cambiamos la fecha al formato de la BD
// $fecha_formateada = date('Y-m-d', strtotime($fecha));
// $gimnasio = $_POST['gimnasio'];
// $imagen_cliente = $_POST['imagen_cliente'];



if (isset($_POST['registro']) && $_POST['registro']  == 'nuevo') {

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
    // die(json_encode($_POST));
    try {  
        // php statement
        $stmt = $conn->prepare("INSERT INTO cliente (nombre_cliente, apellido_cliente, email_cliente, fecha_nacimiento_cliente, telefono_cliente, gimnasio, url_imagen_cliente) VALUES (?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("sssssis", $nombre, $apellido, $email, $fecha_formateada, $telefono, $gimnasio, $imagen_url);
        $stmt->execute();
        // insert_id es un valor de $stmt
        $id_registro = $stmt->insert_id;
        // En caso de que no haya registro el $id_registro=0
        
        if ($id_registro > 0) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_registro' => $id_registro,
                // Variable reclarado en move_uploaded_file
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
?>