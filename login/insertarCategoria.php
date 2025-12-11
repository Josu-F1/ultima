<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$nombre = $_POST["nombre"];

$sql = "INSERT INTO categorias (nombre) VALUES ('$nombre')";

if($conn->query($sql)) {
    echo "Categoría agregada";
} else {
    echo "Error: " . $conn->error;
}
?>
