<?php
// Datos de conexión (los que te dio InfinityFree)
$host = "sql300.infinityfree.com";         // Ej: sqlXXX.epizy.com
$db   = "if0_40224536_alumnos"; // Ej: alumnos_db
$user = "if0_40224536";       // Usuario MySQL
$pass = "wZSuNlz0wMmQj";    // Contraseña MySQL

$conn = new mysqli($host, $user, $pass, $db);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['name'];
$matricula = $_POST['matricula'];
$carrera = $_POST['carrera'];

// Insertar en la base de datos
$sql = "INSERT INTO alumnos (nombre, matricula, carrera) VALUES ('$nombre', '$matricula', '$carrera')";

if ($conn->query($sql) === TRUE) {
    // Redirige a index.html con mensaje de éxito
    header("Location: index.html?status=success");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
