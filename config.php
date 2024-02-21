<?php
// config.php
$host = 'localhost';
$usuario = 'tu_usuario';
$contrasena = 'tu_contrasena';
$base_de_datos = 'mi_proyecto';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
