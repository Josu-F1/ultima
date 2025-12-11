<?php
include "conexion.php";

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$fecha_limite = $_POST["fecha_limite"];

$sql = "UPDATE tareas SET descripcion='$descripcion', fecha_limite='$fecha_limite' WHERE id='$id'";

if($conn->query($sql)) {
    echo "Tarea actualizada";
} else {
    echo "Error: " . $conn->error;
}
?>
