<?php
include "conexion.php";

$busqueda = $_POST["nombre"];
$sql = "SELECT * FROM PRODUCTOS WHERE prodnombre='$busqueda' OR prodid='$busqueda'";
$resultado = $conn->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    echo json_encode($fila);
} else {
    echo json_encode(["error" => "No encontrado"]);
}

?>
