<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$id = $_POST["id"];

$sql = "DELETE FROM categorias WHERE id='$id'";

if($conn->query($sql)) {
    echo "Categoría eliminada";
} else {
    echo "Error: " . $conn->error;
}
?>
