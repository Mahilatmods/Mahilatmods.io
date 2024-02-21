<my design html->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mahilat Mods</title>
</head>
<body>
    <?php if (isset($_SESSION['usuario_id'])): ?>
        <!-- Contenido para usuarios logueados -->
        <h1>Bienvenido, <?php echo $correo; ?></h1>
        <p>Tienes <?php echo obtenerMonedas($_SESSION['usuario_id']); ?> monedas.</p>
        <p>Fecha de registro: <?php echo obtenerFechaRegistro($_SESSION['usuario_id']); ?></p>
        <a href="cerrar_sesion.php">Cerrar sesión</a>
    <?php else: ?>
        <!-- Formulario de inicio de sesión -->
        <h1>Iniciar Sesión</h1>
        <form action="php/procesar_login.php" method="POST">
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit" name="login">Iniciar Sesión</button>
        </form>

        <!-- Formulario de registro -->
        <h1>Registrarse</h1>
        <form action="php/procesar_registro.php" method="POST">
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit" name="registro">Registrarse</button>
        </form>
    <?php endif; ?>
</body>
</html>
