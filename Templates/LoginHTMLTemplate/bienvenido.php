<?php
session_start();

// Si no hay un usuario en la sesión, redirige al login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
        <p>Has iniciado sesión correctamente.</p>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>