<?php
// Archivo: conexion.php

$servername = "localhost"; // Cambia si es necesario
$username = "";  // Cambia por tu nombre de usuario
$password = ""; // Cambia por tu contraseña
$dbname = "ravapro";       // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conectado exitosamente";
?>
