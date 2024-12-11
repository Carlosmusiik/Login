<?php
session_start();
include('Conexion.php');

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['usuario']);
    $Clave = validate($_POST['clave']);

    if (empty($Usuario)) {
        header("Location: index.php?error=El Usuario es requerido");
        exit();
    } elseif (empty($Clave)) {
        header("Location: index.php?error=La Clave es requerida");
        exit();
    } else {
        // Cambia tu consulta para evitar inyección SQL usando sentencias preparadas
        $sql = "SELECT * FROM Users WHERE Usuario = ? AND Clave = ?";
        $stmt = mysqli_prepare($conexion, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $Usuario, $Clave);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave) {
                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['NombreCompleto'] = $row['NombreCompleto'];
                    $_SESSION['Id'] = $row['Id'];
                    header("Location: Inicio.php");
                    exit();
                } else {
                    header("Location: index.php?error=El usuario o la clave son incorrectas");
                    exit();
                }
            } else {
                header("Location: index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        } else {
            header("Location: index.php?error=Error en la consulta");
            exit();
        }
    }
} else {
    header("Location: index.php?error=Por favor, complete todos los campos");
    exit();
}
