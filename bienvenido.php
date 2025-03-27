<?php
session_start();

if (!isset($_SESSION['autenticado'])) {
    header("Location: iniciar.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h2>¡Bienvenido!</h2>
    <p>Has ingresado correctamente.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
