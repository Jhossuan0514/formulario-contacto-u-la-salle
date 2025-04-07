<?php
include "conexion.php";

$sql = "SELECT * FROM mensajes ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes recibidos</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        table {
            width: 100%;
            background-color: #fff;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #2c7be5;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <h2>📩 Mensajes recibidos</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Mensaje</th><th>Fecha</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["correo"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["mensaje"]) . "</td>";
            echo "<td>" . $row["fecha"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay mensajes registrados.</p>";
    }

    $conn->close();
    ?>

    <p><a href="index.php" class="boton">Volver al inicio</a></p>
</body>
</html>

