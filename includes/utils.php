<?php

// código reutilizado mayormente de nuestro proyecto anterior
// https://github.com/AnderRasoVazquez/proyecto_seguridad/blob/master/includes/utilidades.php

function createSession($pEmail, $pName) {
    session_start();
    // variables de sesión
    $_SESSION["currentUserEmail"] = $pEmail;
    $_SESSION["currentUserName"] = $pName;
}

function endSession() {
    // se borran las variables de sesión
    $_SESSION = array();
    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
     }
    // Finally, destroy the session.
    session_destroy();
}

function emailIsAlreadyUsed($pEmail) {
    $conn = new Connection();
    $conn->connect();
    $sql_email = $conn->escape_string($email);
    $sql = "SELECT email FROM user WHERE email='".$hash_password."')";
    $res = $conn->query($sql);
    $conn->close();
    if ($res) {
        return True;
    } else {
        return False;
    }
}

?>
