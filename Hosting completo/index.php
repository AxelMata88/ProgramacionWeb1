<?php
include('./logica/db.php');
$consulta = "SELECT * FROM usuarios";
$result = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">Usuarios</h1>

    <a href="./logica/create.php" class="boton">➕ Agregar Usuario</a>

    <table class="tabla">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>email</th>
                <th>teléfono</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <span class="ransom-letter style1"><?php echo $row['nombre']; ?></span>
                </td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td>
                    <a href="./logica/update.php?id=<?php echo $row['id']; ?>" class="accion editar">Editar</a>
                    <a href="./logica/delete.php?id=<?php echo $row['id']; ?>" class="accion eliminar">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
