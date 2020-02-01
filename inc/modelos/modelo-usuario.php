<?php
$accion=$_POST['accion'];
// Valores que se mandan en la tabla
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sexo=$_POST['sexo'];
$f_nacimiento=$_POST['f_nacimiento'];
$gimnasio=$_POST['gimnasio'];
$email=$_POST['email'];
$password=$_POST['password'];
$telefono=$_POST['telefono'];

if($accion==='crear'){
    // Codigo para crear los administradores
    // Hashear password
    $opciones=array(
        'cost'=>12
    );
    // password_hash encripta el password en un cadena de 60 caracteres
    $hash_password=password_hash($password, PASSWORD_BCRYPT, $opciones);

    // Importar la conexion
    include '../funciones/conexion.php';

    try{
        // Realizar la consulta a la base de datos
        $stmt=$conn->prepare("INSERT INTO usuarios (nombre, apellido, sexo, f_nacimiento, gimnasio, email, password, telefono) VALUES (?, ?, ?, ?, ?, ?, ?, ?) ");
        // Vamos a ingresar dos strign
        $stmt->bind_param('ssssssss', $nombre, $apellido, $sexo, $f_nacimiento, $gimnasio, $email, $hash_password, $telefono);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta=array(
                'respuesta'=>'correcto',
                'id_insertado'=>$stmt->insert_id,
                'tipo'=>$accion
            );
        }
        else{
            $respuesta=array(
                'respuesta'=>'error'
            );
        }
        // Cerramos el stament
        $stmt->close();
        // Cerramos la conexion
        $conn->close();
    } catch(Exception $e){
        // En caso de error, tomar la exception
        $respuesta=array(
            'error'=>$e->getMessage()
        );
    }
    echo json_encode($respuesta);
}