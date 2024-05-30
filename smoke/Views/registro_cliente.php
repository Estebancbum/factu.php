<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Cliente</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <h2>Registro de Cliente</h2>
    <form action="../Controllers/RegistrarClienteController.php" method="post">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="documento">Número de Documento:</label>
        <input type="text" id="documento" name="documento" required><br><br>
        <label for="tipo_documento">Tipo de Documento:</label>
        <select id="tipo_documento" name="tipo_documento" required>
            <option value="CC">Cédula de Ciudadanía</option>
            <option value="CE">Cédula de Extranjería</option>
            <option value="NIT">NIT</option>
            <option value="TI">Tarjeta de Identidad</option>
            <option value="Otro">Otro</option>
        </select><br><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
