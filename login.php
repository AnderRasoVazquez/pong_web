<?php

// cabecera de la pagina
include "includes/header.php";
include "includes/utils.php";

require_once 'includes/db_connection.php';

$conn = new Connection();
$conn->connect();

$email = $_POST['login_email'];
$password = $_POST['login_password'];

$sql_email = $conn->escape_string($email);
$sql = "SELECT * FROM user WHERE email='".$sql_email."'";
$res = $conn->query($sql);
$conn->close();
if ($res && mysqli_num_rows($res) == 1) {
    $row = $res->fetch_object();
    if (password_verify($password, $row->password)) {
        // login correcto
        createSession($email, $row->username);
        header("Location: index.php");
        exit();
    } else {
        // login incorrecto
        header("Location: loging_page.php");
        exit();
    }
}

// pie de pagina
include "includes/footer.php";

?>
