
<?php
// cabecera de la pagina
include "includes/header.php";

if (isset($_SESSION["currentUserEmail"])) {
?>
<h3>Has iniciado sesión, puedes descargar una copia del juego</h3>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pong para Windows <span class="badge badge-danger">New!</span></h5>
        <p class="card-text">Esta es la versión hecha para jugar en el sistema operativo Windows, descarga el archivo zip y descomprímelo para jugar.</p>
        <a href="resources/Pong-windows.zip" class="btn btn-primary">Pong-windows.zip</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pong para Linux <span class="badge badge-danger">New!</span></h5>
        <p class="card-text">También tenemos una versión para Linux, descomprime el archivo tar.gz.</p>
        <a href="resources/Pong-linux.tar.gz" class="btn btn-primary">Pong-linux.tar.gz</a>
      </div>
    </div>
  </div>
</div>

<?php
} else {
    header("Location: login_page.php");
}
// pie de pagina
include "includes/footer.php";
?>
