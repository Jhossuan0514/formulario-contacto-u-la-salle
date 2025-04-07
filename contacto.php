<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form action="guardar_contacto.php" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo electrónico:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    <p><a href="index.php" class="boton">Volver al inicio</a></p>

</body>
</html>
