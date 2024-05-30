<?php
class ConexionBDModel {
    public $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "facturacion_tienda_db";

        $this->conn = new mysqli($servername, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }
}
?>
