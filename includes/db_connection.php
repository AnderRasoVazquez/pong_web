<?php

// clase para conectarse con MySQL
// código reutilizado mayormente de nuestro proyecto anterior
// https://github.com/AnderRasoVazquez/proyecto_seguridad/blob/master/includes/DB/Conexion.php
class Connection {

    private $user;
    private $host;
    private $password;
    private $datbase;
    private $connection;

    public function __construct() {
        $conf_file = "db_files/db.conf";
        $json = json_decode(file_get_contents($conf_file));
        $this->user = $json->{"user"};
        $this->host = $json->{"host"};
        $this->password = $json->{"password"};
        $this->database = $json->{"database"};
    }

    public function connect() {
        $this->connection = mysqli_connect(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );
        if (!$this->connection) {
            die('No se pudo establecer la conexión con la base de datos: ' . mysqli_connect_error());
        }
    }

    public function close() {
        if ($this->connection) {
            $this->connection->close();
            $this->connection = null;
        }
    }

    public function query($query) {
        if ($this->connection) {
            return $this->connection->query($query);
        }
    }

    public function get_last_error() {
        if ($this->connection) {
            return $this->connection->error;
        }
    }

    public function escape_string($string) {
        if ($this->connection) {
            return $this->connection->escape_string($string);
        }
    }

}

?>
