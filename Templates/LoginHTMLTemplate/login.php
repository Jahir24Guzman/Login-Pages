<?php
// Inicia la sesión
session_start();

// Credenciales de ejemplo (en un caso real, las credenciales estarían en una base de datos)
$usuario_correcto = "admin";
$contraseña_correcta = "12345";

// Verifica si se han enviado los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contraseña = $_POST['password'];

    // Valida las credenciales
    if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
        // Guardamos el nombre de usuario en la sesión
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenido.php"); // Redirige a una página de bienvenida
        exit();
    } else {
        // Credenciales incorrectas
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pantalla de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>