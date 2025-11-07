<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">Agregar Usuario</h1>

    <form method="POST" action="create.php" class="formulario">
        <label>nombre</label>
        <input type="text" name="nombre" required>

        <label>email</label>
        <input type="email" name="email" required>

        <label>teléfono</label>
        <input type="text" name="telefono" required>

        <input type="submit" value="agregar usuario" class="boton-enviar">
    </form>

    <br>
    <a href="../index.php" class="boton-volver">volver</a>
</body>
</html>
