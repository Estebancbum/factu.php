<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="ini.css">
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="../Controllers/IniciarSesionController.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
