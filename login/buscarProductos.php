<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$buscar = $_POST["buscar"];

$sql = "SELECT p.id, p.nombre, p.cantidad, p.precio, p.categoria_id, c.nombre as categoria
        FROM productos p
        LEFT JOIN categorias c ON p.categoria_id = c.id
        WHERE p.nombre LIKE '%$buscar%' OR p.id LIKE '%$buscar%'
        ORDER BY p.id";
$resultado = $conn->query($sql);
$datos = [];

if($resultado && $resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }
}

echo json_encode($datos);
?>
