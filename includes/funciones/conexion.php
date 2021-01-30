<?php

    // Local
    $conn = new mysqli('localhost', 'root', '', 'workout');

    // Hostgator
    // $conn = new mysqli('localhost', 'eliseova_eliseovm', 'Emachines434f@', 'eliseova_workout');

    if($conn->connect_error){
        echo $error->$conn->connect_error;
    }

    if(!mysqli_set_charset($conn, 'utf8')) {
        printf('Error cargando los caracteres', mysqli_error($conn)); 
        exit(); 
    }

?>