  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">PONG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php
            if (isset($_SESSION["currentUserEmail"])) {
                // si hay sesión iniciada mostramos enlace al logout
                $name = $_SESSION["currentUserName"];
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="descargar.php">Descargar PONG</a>
                </li>
                <?php
            } else {
                // si no, mostramos enlace al login y al signup
                ?>
                <li class="nav-item">
                <!--
                cuando estemos en la página del login añadimos la clase active
                lo mismo para el de registrarse
                <li class="nav-item active">-->
                  <a class="nav-link" href="login_page.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup_page.php">Registrarse</a>
                </li>
                <?php
            }
         ?>
      </ul>
    </div>
  </nav>
