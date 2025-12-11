<?php
include "conexion.php";

$id = $_POST["id"];

$sql = "UPDATE tareas SET estado='completada' WHERE id='$id'";

if($conn->query($sql)) {
    echo "Tarea completada";
} else {
    echo "Error: " . $conn->error;
}
?>
