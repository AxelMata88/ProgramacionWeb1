<?php
include('db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";
    
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
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   <h1 class="titulo">Editar Usuario</h1>

<form class="formulario" method="POST" action="update.php?id=<?php echo $id; ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>

    <button type="submit" class="boton-enviar">Actualizar Usuario</button>
</form>

<a href="../index.php" class="boton-volver">Volver a la lista</a>

</body>
</html>