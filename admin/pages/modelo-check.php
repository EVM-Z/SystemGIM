<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'funciones/funciones.php';



if ($_POST['registro'] == 'entrada') { 
    
    // Comprobación de existencia y declaración de variables
    $id_check = $_POST['id_check'];

    try {
        // php statement
        $stmt = $conn->prepare("INSERT INTO entrada_salida (cliente_entrada_salida, fecha_entrada_salida, e_s) VALUES (?, CURDATE(), curTime()) ");
        $stmt->bind_param("i", $id_check);
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

if (isset($_POST['id_check'])) {
    
    // Comprobación de existencia y declaración de variables
    $id_check = $_POST['id_check'];

    // $sql = "SELECT * FROM cliente WHERE id_cliente = $id_check ";
    // $resultado = $conn->query($sql);
    // $cliente = $resultado->fetch_assoc();

    // return $cliente;
}
?>