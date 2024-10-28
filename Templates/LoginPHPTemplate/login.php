<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí puedes agregar la lógica para verificar las credenciales
    if ($username === "admin" && $password === "1234") {
        echo "Login exitoso";
    } else {
        echo "Credenciales incorrectas";
    }
}
?>