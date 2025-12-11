<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];

$sql = "UPDATE categorias SET nombre='$nombre' WHERE id='$id'";

if($conn->query($sql)) {
    echo "Categoría actualizada";
} else {
    echo "Error: " . $conn->error;
}
?>
