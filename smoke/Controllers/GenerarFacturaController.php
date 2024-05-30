<?php
require_once('../Models/ConexionBDModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $referencia = $_POST['referencia'];
    $fecha = $_POST['fecha'];
    $descuento = $_POST['descuento'];
    $total = $_POST['total'];
    $cliente_id = $_POST['cliente_id'];

    $conexionBDModel = new ConexionBDModel();

    $query_check = "SELECT COUNT(*) AS num_filas FROM facturas WHERE refencia = '$referencia'";
    $resultado_check = $conexionBDModel->conn->query($query_check);
    $fila_check = $resultado_check->fetch_assoc();
    $num_filas = $fila_check['num_filas'];

    if ($num_filas > 0) {
        echo "Error: La referencia '$referencia' ya está registrada en la base de datos.";
    } else {
        $query_insert = "INSERT INTO facturas (refencia, fecha, idCliente, descuento, valorFactura) 
                        VALUES ('$referencia', '$fecha', $cliente_id, '$descuento', '$total')";
        if ($conexionBDModel->conn->query($query_insert) === TRUE) {
            echo "La factura se ha guardado correctamente en la base de datos.";
            echo "<br><br>";
            echo "Datos ingresados:";
            echo "<br>";
            echo "Referencia: $referencia";
            echo "<br>";
            echo "Fecha: $fecha";
            echo "<br>";
            echo "Descuento: $descuento";
            echo "<br>";
            echo "Total: $total";
            echo "<br><br>";
            echo '<a href="../index.php"><button>Salir</button></a>';
        } else {
            echo "Error al guardar la factura en la base de datos: " . $conexionBDModel->conn->error;
        }
    }
}
?>
