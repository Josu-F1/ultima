<?php
include "conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];

$sql = "UPDATE PRODUCTOS SET prodnombre='$nombre', prodcantidad='$cantidad', prodprecio='$precio' WHERE prodid='$id'";

if ($conn->query($sql)) {
    echo "Actualizado";
} else {
    echo "Error: " . $conn->error;
}
?>
