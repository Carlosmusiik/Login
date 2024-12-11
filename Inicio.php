<?php
session_start(); // Esto inicia la sesión y permite acceder a $_SESSION
if (!isset($_SESSION['NombreCompleto'])) {
    // Redirige al formulario de inicio de sesión si la sesión no está activa
    header("Location: index.php?error=Por favor inicia sesión primero");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #6effa7, #00b8ca);
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }

    .container {
        background: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        width: 90%;
    }

    h1 {
        font-size: 2rem;
        color: #fff;

    }

    p {
        font-size: 1.2rem;
        margin: 1rem 0;
        color: #fff;

    }

    a {
        display: inline-block;
        margin-top: 1.5rem;
        padding: 0.8rem 1.5rem;
        background: #00b8ca;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background 0.3s ease;
    }

    a:hover {
        background: #007acc;
    }
</style>
</head>

<body>
    <center>
        <h1>HOME</h1>
        <h1>¡Bienvenido, <?php echo htmlspecialchars($_SESSION['NombreCompleto']); ?>!</h1>
        <h1>Ingreso Exitoso</h1>
    </center>
    <a href="CerrarSesion.php">Cerrar Sesión</a>
</body>

</html>