<?php
// procesar_registro.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registro'])) {
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    $stmt = $conexion->prepare("INSERT INTO usuarios (correo, contrasena, monedas, fecha_registro) VALUES (?, ?, 5, NOW())");
    $stmt->execute([$correo, $contrasena]);
}
?>
