<?php
    $host = "127.0.0.1";
    $port = '4306';
    $user = "root";
    $pass = "Octavio.31";
    $db   = "sitipersonal";

    $conn = new mysqli($host, $user, $pass, $db, $port);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
?>
