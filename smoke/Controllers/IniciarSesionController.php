<?php
require_once('../Models/ConexionBDModel.php');

class IniciarSesionController extends ConexionBDModel {
    public function iniciarSesion($username, $password) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND pwd = '$password'";
            $result = $this->conn->query($sql);

            if ($result->num_rows == 1) {
                header("Location: ../Views/registro_cliente.php");
                exit();
            } else {
                echo "El usuario no está registrado.";
            }
        }
    }
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $iniciarSesionController = new IniciarSesionController();
    $iniciarSesionController->iniciarSesion($username, $password);
} else {
    echo "No se han enviado datos de inicio de sesión.";
}
?>
