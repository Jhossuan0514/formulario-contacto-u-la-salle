<?php
include "conexion.php";

$sql = "SELECT * FROM mensajes ORDER BY fecha DESC";
$result = $conn->query($sql);

echo "<h2>Mensajes recibidos</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Mensaje</th><th>Fecha</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["mensaje"] . "</td>";
        echo "<td>" . $row["fecha"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay mensajes</td></tr>";
}
echo "</table>";

$conn->close();
?>
