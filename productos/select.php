<?php
include "conexion.php";
$sql = "SELECT * FROM PRODUCTOS";
$consulta = $conn->query($sql);
$resultado = [];

if ($consulta && $consulta->num_rows > 0) {
    while ($fila = $consulta->fetch_assoc()) {
        $resultado[] = $fila;
    }
}
echo json_encode($resultado);
?>