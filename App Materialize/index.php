<?php
  include('./logica/db.php');
  $consulta = "SELECT * FROM usuarios";
  $result = $conn->query($consulta);
  include('./head.php');
?>
  <div class="center-align">
    <img src="https://cdn-icons-png.flaticon.com/512/747/747545.png" width="100" alt="icono usuarios">
  </div>

  <h4 class="center-align">Lista de Usuarios</h4>

  <div class="row">
  <?php
  include('./db.php');
  $sql = "SELECT * FROM usuarios";
  $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()) {
  ?>
    <div class="col s12 m6 l4">
      <div class="card">
        <div class="card-content white-text">
          <div style="display:flex; align-items:center;">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($row['nombre']); ?>&background=000000&color=fff" width="50" style="border-radius:50%; margin-right:10px;">
            <div>
              <h5><?php echo $row['nombre']; ?></h5>
              <p><?php echo $row['email']; ?></p>
              <p><?php echo $row['telefono']; ?></p>
            </div>
          </div>
        </div>
        <div class="card-action center-align">
          <a href="./update.php?id=<?php echo $row['id']; ?>" class="btn-small blue darken-3">Editar</a>
          <a href="./logica/delete.php?id=<?php echo $row['id']; ?>" class="btn-small red darken-3">Eliminar</a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


  <div class="center-align" style="margin-top: 20px;">
    <a href="create.php" class="btn-large waves-effect waves-light"><i class="material-icons left">add</i>Agregar Usuario</a>
  </div>

<?php include('./footer.php'); ?>
