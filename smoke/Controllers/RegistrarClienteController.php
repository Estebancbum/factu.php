<?php
require_once('../Models/ConexionBDModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $tipo_documento = $_POST['tipo_documento'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $conexionBDModel = new ConexionBDModel();

    $resultado = $conexionBDModel->conn->query("INSERT INTO clientes (nombreCompleto, tipoDocumento, numeroDocumento, email, telefono) VALUES ('$nombre', '$tipo_documento', '$documento', '$email', '$telefono')");

    if ($resultado === TRUE) {
        $cliente_id = $conexionBDModel->conn->insert_id;

        session_start();
        $_SESSION['nombre'] = $nombre;
        $_SESSION['documento'] = $documento;
        $_SESSION['tipo_documento'] = $tipo_documento;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['email'] = $email;

        echo "<script>alert('Cliente registrado correctamente. ID asignado: $cliente_id');</script>";

        echo "<script>setTimeout(function(){ window.location.href = '../Views/generar_factura.php'; }, 1000);</script>";
        exit();
    } else {
        echo "Error al registrar el cliente: " . $conexionBDModel->conn->error;
    }
}
?>
