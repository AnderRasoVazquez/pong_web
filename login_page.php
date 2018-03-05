<?php
// cabecera de la pagina
include "includes/header.php";
?>
<div class="card bg-light mb-3 capar-anchura mx-auto">
  <div class="card-header">Inicia sesión en tu cuenta</div>
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="inputEmail">Dirección de email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        <!-- Para hacer que se muestre el texto de feedback cuando es erróneo solo hay
        que añadir la clase "is-invalid" al input.
        <input type="email" class="form-control is-invalid" id="inputEmail" placeholder="Email">
        Con javascript se puede cambiar el texto de los divs de feedback para poner el error exacto -->
        <div id="email-feedback" class="invalid-feedback">
        Email incorrecto.
        </div>
      </div>
      <div class="form-group">
        <label for="inputPass">Contraseña</label>
        <input type="password" class="form-control" id="inputPass" placeholder="Contraseña">
        <div id="password-feedback" class="invalid-feedback">
        Password incorrecto.
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
  </div>
</div>

<?php
// pie de pagina
include "includes/footer.php";
?>
