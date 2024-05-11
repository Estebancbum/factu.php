<?php

include ('../utils/connection.php');
$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

$consult = "SELECT* FROM usuarios where usuario = '$USERNAME' and pwd = '$PASSWORD'";
$result  = mysqli_query($connection, $consult);

if ($result === false) {
    // La consulta falló, maneja el error.
    echo "Error en la consulta: " . mysqli_error($connection);
} else {
    $rows = mysqli_num_rows($result);

    if ($rows) {
        header("location:../views/dashboard.php");
    } else {
        include("../views/login.php");
        ?>
        <h1>ERROR DE AUTENTIFICACION</h1>
        <?php
    }
}

/*$rows = mysqli_num_rows($result);

if ($rows) {
    header("location:home.html");
}else {
    include("login.php");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($result);
mysqli_close($connection);
?>*/

