<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "LoginSystem";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "Conexión fallida";
}
