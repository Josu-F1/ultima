<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$id = $_POST["id"];

$sql = "DELETE FROM productos WHERE id='$id'";

if($conn->query($sql)) {
    echo "Producto eliminado";
} else {
    echo "Error: " . $conn->error;
}
?>
