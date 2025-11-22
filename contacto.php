<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Contacto</title>
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body class="bodis">
        <div class="cuadrocont">
            <h1 class="con-texto">CONTACTO</h1>
            <form action="procesar_contacto.php" method="POST" class="formulario">
                <div class="form-contacto">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" required>

                    <label>Correo electronico:</label>
                    <input type="email" name="correo" required>

                    <label>Mensaje:</label>
                    <textarea name="mensaje" rows="5" required></textarea>

                    <button type="submit">Enviar mensaje</button>

                    <?php if (isset($_GET['ok'])): ?>
                        <p class="exito">¡Mensaje enviado correctamente!</p>
                    <?php endif; ?>

                    <?php if (isset($_GET['error'])): ?>
                        <p class="error">Error: No se pudo enviar el mensaje.</p>
                    <?php endif; ?>

                </div>
            </form>
                <a href="index.php" class="volverinicio">Volver al inicio</a>
        </div>
    </body>
</html>
