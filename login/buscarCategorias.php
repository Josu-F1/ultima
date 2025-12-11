<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$buscar = $_POST["buscar"];

$sql = "SELECT * FROM categorias WHERE nombre LIKE '%$buscar%' OR id LIKE '%$buscar%' ORDER BY id";
$resultado = $conn->query($sql);
$datos = [];

if($resultado && $resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }
}

echo json_encode($datos);
?>
