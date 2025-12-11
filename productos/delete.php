<?php
include "conexion.php";

$id = $_POST["id"];

$sql = "DELETE FROM PRODUCTOS WHERE prodid='$id'";

if ($conn->query($sql)) {
    echo "Eliminado";
} else {
    echo "Error: " . $conn->error;
}
?>
