<?php
include('./logica/db.php');

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
    header('Location: ./index.php');
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

include('./head.php');
?>

  <h4 class="center-align">Editar Usuario</h4>

  <div class="card">
    <div class="card-content">
      <form method="POST" action="./update.php?id=<?= $id; ?>">
        <div class="input-field">
          <input id="nombre" name="nombre" type="text" value="<?= $row['nombre']; ?>" required>
          <label class="active" for="nombre">Nombre</label>
        </div>

        <div class="input-field">
          <input id="email" name="email" type="email" value="<?= $row['email']; ?>" required>
          <label class="active" for="email">Email</label>
        </div>

        <div class="input-field">
          <input id="telefono" name="telefono" type="text" value="<?= $row['telefono']; ?>" required>
          <label class="active" for="telefono">Teléfono</label>
        </div>

        <div class="center-align">
          <button type="submit" class="btn waves-effect waves-light">
            <i class="material-icons left">save</i>Actualizar
          </button>
          <a href="./index.php" class="btn grey darken-2">
            <i class="material-icons left">arrow_back</i>Volver
          </a>
        </div>
      </form>
    </div>
  </div>

<?php include('./footer.php'); ?>
