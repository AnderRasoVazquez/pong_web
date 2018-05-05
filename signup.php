<?php

// cabecera de la pagina
include "includes/header.php";

require_once 'includes/db_connection.php';

$conn = new Connection();
$conn->connect();

$username = $_POST['signup_username'];
$email = $_POST['signup_email'];
$password = $_POST['signup_password'];

$sql_username = $conn->escape_string($username);
$sql_email = $conn->escape_string($email);
$hash_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user VALUES('".$sql_username."', '".$sql_email."', '".$hash_password."')";
$res = $conn->query($sql);
$conn->close();
if ($res) {
    createSession($email, $username);
    header("Location: index.php");
    exit();
} else {
    header("Location: error.php");
    exit();
}

// pie de pagina
include "includes/footer.php";

?>
