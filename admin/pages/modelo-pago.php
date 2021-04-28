<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';



if ($_POST['registro'] == 'nuevo') {

    // Comprobación de existencia y declaración de variables
    $nombre_cliente_pago = $_POST['nombre_cliente_pago'];
    $cobertura_pago = $_POST['cobertura_pago'];
    // Reemplaza los caracteres
    $cobertura_pago = str_replace('/', '-', $cobertura_pago);
    // Cambiamos la fecha al formato de la BD
    $fecha_formateada = date('Y-m-d', strtotime($cobertura_pago));
    $pago = $_POST['pago'];


    try {
        // php statement
        $stmt = $conn->prepare("INSERT INTO pago (nombre_cliente_pago, cobertura_pago, pago, fecha_creacion_pago) VALUES (?, ?, ?, CURDATE()) ");
        $stmt->bind_param("iss", $nombre_cliente_pago, $fecha_formateada, $pago);
        $stmt->execute();
        // insert_id es un valor de $stmt
        $id_registro = $stmt->insert_id;
        // En caso de que no haya registro el $id_registro=0
        if ($id_registro > 0) {
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

if ($_POST['registro'] == 'editar') {
    
    // Comprobación de existencia y declaración de variables
    $id_pago = $_POST['id_pago'];
    $nombre_cliente_pago = $_POST['nombre_cliente_pago'];
    $cobertura_pago = $_POST['cobertura_pago'];
    // Reemplaza los caracteres
    $cobertura_pago = str_replace('/', '-', $cobertura_pago);
    // Cambiamos la fecha al formato de la BD
    $fecha_formateada = date('Y-m-d', strtotime($cobertura_pago));
    $pago = $_POST['pago'];

    try {
        $stmt = $conn->prepare('UPDATE pago SET nombre_cliente_pago = ?, cobertura_pago = ?, pago = ? WHERE id_pago = ? ');
        // nombre_cliente_pago = int
        // cobertura_pago = string
        // pago = string
        // id_pago = int
        $stmt->bind_param("issi", $nombre_cliente_pago, $fecha_formateada, $pago, $id_pago);
        
        $estado = $stmt->execute();

        if ($estado == true) {
            // Si se hizo una modificacion
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $id_pago
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

if ($_POST['registro'] == 'eliminar') {

    $id_borrar = $_POST['id'];

    try {
        $stmt = $conn->prepare('DELETE FROM pago WHERE id_pago = ? ');
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