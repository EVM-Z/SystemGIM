<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';

// Comprobación de existencia y declaración de variables
$id_entrada_salida = $_POST['id_entrada_salida'];

if ($_POST['registro'] == 'entrada') { 

    try {
        // php statement
        $stmt = $conn->prepare("INSERT INTO entrada_salida (cliente_entrada_salida, fecha_entrada_salida, hora_entrada_salida) VALUES (?, CURDATE(), curTime()) ");
        $stmt->bind_param("i", $id_entrada_salida);
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
?>