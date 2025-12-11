<?php
include "conexion.php";

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha_limite = $_POST["fecha_limite"];

$sql = "INSERT INTO tareas (titulo, descripcion, fecha_limite) VALUES ('$titulo', '$descripcion', '$fecha_limite')";

if($conn->query($sql)) {
    echo "Tarea agregada";
} else {
    echo "Error: " . $conn->error;
}
?>
