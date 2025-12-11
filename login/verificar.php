<?php
session_start();
include "conexion.php";

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = $conn->query($sql);

if($resultado && $resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    echo "ok";
} else {
    echo "Usuario o contraseña incorrectos";
}
?>
