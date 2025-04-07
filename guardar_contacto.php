<?php
include "conexion.php";

// Validar campos
if (isset($_POST['nombre'], $_POST['correo'], $_POST['mensaje'])) {
    $nombre = $conn->real_escape_string(trim($_POST['nombre']));
    $correo = $conn->real_escape_string(trim($_POST['correo']));
    $mensaje = $conn->real_escape_string(trim($_POST['mensaje']));

    if (!empty($nombre) && filter_var($correo, FILTER_VALIDATE_EMAIL) && !empty($mensaje)) {
        $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>✅ Mensaje enviado correctamente.</p>";
            echo "<a href='index.php'>Volver al inicio</a>";
        } else {
            echo "❌ Error al guardar el mensaje: " . $conn->error;
        }
    } else {
        echo "❌ Datos inválidos. Asegúrate de completar todos los campos correctamente.";
    }
} else {
    echo "❌ No se recibieron los datos esperados.";
}

$conn->close();
?>
