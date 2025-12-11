<?php
include "conexion.php";

$id = $_POST["id"];

$sql = "DELETE FROM tareas WHERE id='$id'";

if($conn->query($sql)) {
    echo "Tarea eliminada";
} else {
    echo "Error: " . $conn->error;
}
?>
