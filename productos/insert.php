<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];

$sql = "SELECT * FROM PRODUCTOS WHERE prodnombre='$nombre'";
$resultado = $conn->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $nuevaCantidad = $fila['prodcantidad'] + $cantidad;
    $sql = "UPDATE PRODUCTOS SET prodcantidad='$nuevaCantidad' WHERE prodnombre='$nombre'";
    if ($conn->query($sql)) {
        echo "Cantidad sumada";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    $sql = "INSERT INTO PRODUCTOS (prodnombre, prodcantidad, prodprecio) VALUES ('$nombre', '$cantidad', '$precio')";
    if ($conn->query($sql)) {
        echo "Insertado";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

