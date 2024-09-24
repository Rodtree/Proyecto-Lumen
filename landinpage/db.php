<?php
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "id22318486_sukuna";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
