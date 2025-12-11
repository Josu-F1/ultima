<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    echo "No autorizado";
    exit();
}

include "conexion.php";

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$categoriaId = $_POST["categoria"];


// =====================================================================
//  OPCIÓN 1: SUMAR CANTIDAD SI EL PRODUCTO YA EXISTE  (TU OPCIÓN ACTUAL)
// =====================================================================

/*
$sqlBuscar = "SELECT id, cantidad FROM productos WHERE nombre='$nombre' LIMIT 1";
$resultado = $conn->query($sqlBuscar);

if($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $cantidadNueva = $fila['cantidad'] + $cantidad;

    $sqlActualizar = "UPDATE productos SET cantidad='$cantidadNueva' WHERE id='{$fila['id']}'";

    if($conn->query($sqlActualizar)) {
        echo "Cantidad sumada";
    } else {
        echo "Error: " . $conn->error;
    }

} else {

    $sqlInsertar = "INSERT INTO productos (nombre, cantidad, precio, categoria_id)
                    VALUES ('$nombre', '$cantidad', '$precio', '$categoriaId')";
    
    if($conn->query($sqlInsertar)) {
        echo "Producto agregado";
    } else {
        echo "Error: " . $conn->error;
    }
}

exit();
*/



// =====================================================================
//  OPCIÓN 2: NO PERMITIR DUPLICADOS (SI EXISTE → ERROR)
// =====================================================================

/*
$sqlBuscar = "SELECT id FROM productos WHERE nombre='$nombre' LIMIT 1";
$resultado = $conn->query($sqlBuscar);

if($resultado->num_rows > 0) {
    echo "El producto ya existe. No se puede agregar.";
    exit();
}

$sqlInsertar = "INSERT INTO productos (nombre, cantidad, precio, categoria_id)
                VALUES ('$nombre', '$cantidad', '$precio', '$categoriaId')";

if($conn->query($sqlInsertar)) {
    echo "Producto agregado";
} else {
    echo "Error: " . $conn->error;
}

exit();
*/



// =====================================================================
//  OPCIÓN 3: ACTUALIZAR SIN SUMAR (REEMPLAZAR CANTIDAD COMPLETA)
// =====================================================================

/*
$sqlBuscar = "SELECT id FROM productos WHERE nombre='$nombre' LIMIT 1";
$resultado = $conn->query($sqlBuscar);

if($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $id = $fila['id'];

    $sqlActualizar = "UPDATE productos SET 
                        cantidad='$cantidad',
                        precio='$precio',
                        categoria_id='$categoriaId'
                      WHERE id='$id'";

    if($conn->query($sqlActualizar)) {
        echo "Producto actualizado";
    } else {
        echo "Error: " . $conn->error;
    }

} else {

    $sqlInsertar = "INSERT INTO productos (nombre, cantidad, precio, categoria_id)
                    VALUES ('$nombre', '$cantidad', '$precio', '$categoriaId')";

    if($conn->query($sqlInsertar)) {
        echo "Producto agregado";
    } else {
        echo "Error: " . $conn->error;
    }
}

exit();
*/



// =====================================================================
//  OPCIÓN 4: ACTUALIZAR SOLO PRECIO Y CATEGORÍA (NO TOCAR CANTIDAD)
// =====================================================================

/*
$sqlBuscar = "SELECT id FROM productos WHERE nombre='$nombre' LIMIT 1";
$resultado = $conn->query($sqlBuscar);

if($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $id = $fila['id'];

    $sqlActualizar = "UPDATE productos SET 
                        precio='$precio',
                        categoria_id='$categoriaId'
                      WHERE id='$id'";

    if($conn->query($sqlActualizar)) {
        echo "Precio/Categoría actualizados";
    } else {
        echo "Error: " . $conn->error;
    }

} else {

    $sqlInsertar = "INSERT INTO productos (nombre, cantidad, precio, categoria_id)
                    VALUES ('$nombre', '$cantidad', '$precio', '$categoriaId')";

    if($conn->query($sqlInsertar)) {
        echo "Producto agregado";
    } else {
        echo "Error: " . $conn->error;
    }
}

exit();
*/



// =====================================================================
//  OPCIÓN 5: SI EXISTE → NO HACER NADA
// =====================================================================

/*
$sqlBuscar = "SELECT id FROM productos WHERE nombre='$nombre' LIMIT 1";
$resultado = $conn->query($sqlBuscar);

if($resultado->num_rows > 0) {
    echo "Producto ya existe. No se realizó ningún cambio.";
    exit();
}

$sqlInsertar = "INSERT INTO productos (nombre, cantidad, precio, categoria_id)
                VALUES ('$nombre', '$cantidad', '$precio', '$categoriaId')";

if($conn->query($sqlInsertar)) {
    echo "Producto agregado";
} else {
    echo "Error: " . $conn->error;
}

exit();
*/



// =====================================================================
//  OPCIÓN 6: INSERTAR SIEMPRE (ACEPTAR DUPLICADOS)
// =====================================================================


$sqlInsertar = "INSERT INTO productos (nombre, cantidad, precio, categoria_id)
                VALUES ('$nombre', '$cantidad', '$precio', '$categoriaId')";

if($conn->query($sqlInsertar)) {
    echo "Producto agregado incluso si está duplicado";
} else {
    echo "Error: " . $conn->error;
}

exit();


?>
