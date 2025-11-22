<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require 'database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre  = trim($_POST['nombre']);
        $correo  = trim($_POST['correo']);
        $mensaje = trim($_POST['mensaje']);

        if ($nombre == "" || $correo == "" || $mensaje == "") {
            header("Location: contacto.php?error=1");
            exit();
        }

        $sql = "INSERT INTO datos (nombre, correo, mensaje) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $correo, $mensaje);

        if ($stmt->execute()) {
            header("Location: contacto.php?ok=1");
            exit();
        } else {
            header("Location: contacto.php?error=2");
            exit();
        }
    }
?>
