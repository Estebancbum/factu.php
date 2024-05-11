<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro</h1>
    <?php 
        include('../controllers/userController.php');
        include ('../utils/connection.php');
    ?>
    <form action="" method="post" >
        Nombres: <input type="text" name="name"> <br>
        Apellidos: <input type="text" name="lastname"> <br>
        Numero de documento: <input type="text" name="numdoc"> <br>
        Tipo de documento: 
        <select name="maindoc"> 
            <option name="cc">CC</option>
            <option name="ti">TI</option>
            <option name="ce">CE</option>
        </select> <br>
        Telefono: <input type="text" name="cel"> <br>
        Email: <input type="email" name="email"> <br>
        <input type="submit" value="Registrar" name="registro">
    </form>
</body>
</html>