<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia localhost por la dirección del servidor si es necesario
$username = "Luis"; // Cambia tu_usuario por tu nombre de usuario de MySQL
$password = "12345"; // Cambia tu_contraseña por tu contraseña de MySQL
$database = "tienda-libros"; // Cambia tu_base_de_datos por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Establecer el juego de caracteres a UTF-8
$conn->set_charset("utf8");

// Ahora la conexión está lista para ser usada para realizar consultas a la base de datos
?>
