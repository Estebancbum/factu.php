<?php
    $connection = mysqli_connect("localhost","root","","facturacion_tienda_db");
     
    if (!$connection) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>