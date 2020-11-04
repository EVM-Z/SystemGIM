<?php

function usuario_autenticado(){
    // Verificamos si el usuario inicio sesion
    if (!revisar_usuario()) {
        header('Location:login.php');
        exit();
    }
}

function revisar_usuario(){
    // Revisamos el email exista o que tenga un valor
    return isset($_SESSION['email']);
}

// Iniciamos sesion
session_start();
// Verificamos el usuario_autenticado que a su vez llama a revisar_usuario
usuario_autenticado();

?>