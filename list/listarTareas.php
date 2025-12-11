<?php
include "conexion.php";

$sql = "SELECT * FROM tareas ORDER BY fecha_limite ASC, id DESC";
$resultado = $conn->query($sql);
$datos = [];

if($resultado && $resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }
}

echo json_encode($datos);
?>
