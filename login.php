<?php
session_start();

$clave_correcta = "aylih";

$clave_ingresada = $_POST['password'] ?? '';

if ($clave_ingresada === $clave_correcta) {
    $_SESSION['autenticado'] = true;
    header("Location: bienvenido.php");
    exit();
} else {
    $_SESSION['error'] = "Clave incorrecta. Inténtalo de nuevo.";
    header("Location: iniciar.php");
    exit();
}
?>
