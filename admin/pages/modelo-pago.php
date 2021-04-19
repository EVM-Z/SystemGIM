<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';

// Comprobación de existencia y declaración de variables
$id_cliente = $_POST['id_cliente'];
$cobertura_pago = $_POST['cobertura_pago'];
$pago = $_POST['pago'];

if ($_POST['registro'] == 'pago') { 

    try {
        // php statement
        $stmt = $conn->prepare("INSERT INTO pago (nombre_cliente_pago, fecha_entrada_salida, e_s) VALUES (?, CURDATE(), curTime()) ");
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