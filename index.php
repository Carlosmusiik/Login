<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auUHP1zCIehlIhOzKjIW1RfnH+CB2iYkGAW3r9" crossorigin="anonymous">
    <!-- Material Icons (Alternativa a Font Awesome) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="IniciarSesion.php" method="post">
        <h1>Iniciar Sesión</h1>
        <hr>
        <?php
        if (isset($_GET['error'])) {
        ?>
            <p class="error">
                <?php
                echo $_GET['error'];
                ?>
            </p>
        <?php
        }
        ?>
        <hr>
        <div class="input-group">
            <span class="material-icons">person</span>
            <label for="usuario">Usuario</label>
            <input id="usuario" type="text" name="usuario" placeholder="Nombre de usuario" required>
        </div>

        <div class="input-group">
            <span class="material-icons">lock</span>
            <label for="clave">Clave</label>
            <input id="clave" type="password" name="clave" placeholder="Clave" required>
        </div>
        <hr>
        <button type="submit">Iniciar Sesión</button>
        <a href="CrearCuenta.php">Crear Cuenta</a>
    </form>
</body>

</html>