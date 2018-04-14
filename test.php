<?php

// cabecera de la pagina
include "includes/header.php";

require_once 'includes/db_connection.php';

$test = "login";

if ($test == "login") {
    ?>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="inputEmail">Dirección de email</label>
        <input name="login_email" type="email" class="form-control" id="inputEmail" placeholder="Email">
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
        <input name="login_password" type="password" class="form-control" id="inputPass" placeholder="Contraseña">
        <div id="password-feedback" class="invalid-feedback">
        Password incorrecto.
        </div>
      </div>
      <input type="submit" class="btn btn-primary" value="Iniciar sesión">
    </form>
    <?php
} elseif($test == "signup") {
    ?>
    <form action="signup.php" method="post">
      <div class="form-group">
        <label for="inputUser">Nombre de usuario</label>
        <input name="signup_username" type="text" class="form-control" id="inputUser" placeholder="Usuario">
        <!-- Para hacer que se muestre el texto de feedback cuando es erróneo solo hay
        que añadir la clase "is-invalid" al input.
        <input type="text" class="form-control is-invalid" id="inputUser" placeholder="Usuario">
        Con javascript se puede cambiar el texto de los divs de feedback para poner el error exacto -->
        <div id="user-feedback" class="invalid-feedback">
        Nombre de usuario incorrecto.
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail">Dirección de email</label>
        <input name="signup_email" type="email" class="form-control" id="inputEmail" placeholder="Email">
        <div id="email-feedback" class="invalid-feedback">
        Email incorrecto.
        </div>
        <small id="emailHelp" class="form-text text-muted">Recuérdalo, lo usarás para iniciar sesión.</small>
      </div>
      <div class="form-group">
        <label for="inputPass">Contraseña</label>
        <input name="signup_password" type="password" class="form-control" id="inputPass" placeholder="Contraseña">
        <div id="password-feedback" class="invalid-feedback">
        Password incorrecto.
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassRepeat">Repetir contraseña</label>
        <input type="password" class="form-control" id="inputPassRepeat" placeholder="Repetir Contraseña">
        <div id="password-repat-feedback" class="invalid-feedback">
        El password no es igual al anterior.
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
    <?php
}

// pie de pagina
include "includes/footer.php";

?>
