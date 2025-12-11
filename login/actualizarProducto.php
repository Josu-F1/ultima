<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$categoriaId = $_POST["categoria"];

$sql = "UPDATE productos SET nombre='$nombre', cantidad='$cantidad', precio='$precio', categoria_id='$categoriaId' WHERE id='$id'";

if($conn->query($sql)) {
    echo "Producto actualizado";
} else {
    echo "Error: " . $conn->error;
}
?>
