

<?php include ('head.php'); ?> 

  <h4 class="center-align">Agregar Usuario</h4>

  <div class="card">
    <div class="card-content">
      <form method="POST" action="./logica/create.php">
        <div class="input-field">
          <input id="nombre" name="nombre" type="text" required>
          <label for="nombre">Nombre</label>
        </div>

        <div class="input-field">
          <input id="email" name="email" type="email" required>
          <label for="email">Email</label>
        </div>

        <div class="input-field">
          <input id="telefono" name="telefono" type="text" required>
          <label for="telefono">Teléfono</label>
        </div>

        <div class="center-align">
          <button type="submit" class="btn waves-effect waves-light">
            <i class="material-icons left">save</i>Guardar
          </button>
          <a href="./index.php" class="btn grey darken-2">
            <i class="material-icons left">arrow_back</i>Volver
          </a>
        </div>
      </form>
    </div>
  </div>

<?php include ('footer.php'); ?>
