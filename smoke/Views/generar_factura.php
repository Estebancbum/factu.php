<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Genera tu Factura</title>
    <link rel="stylesheet" href="factu.css">
</head>

<body>
    <h2>Genera tu Factura</h2>

    <form action="../Controllers/GenerarFacturaController.php" method="post">
        <label for="referencia">Referencia:</label>
        <input type="text" id="referencia" name="referencia" required><br><br>
        
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" required><br><br>
        
        <label for="descuento">Descuento:</label>
        <select id="descuento" name="descuento" required>
            <option value="0">0%</option>
            <option value="5">5%</option>
            <option value="10">10%</option>
        </select><br><br>
        
        <label for="total">Total:</label>
        <input type="text" id="total" name="total" required><br><br>
        
        <label for="cliente_id">ID de Cliente:</label>
        <input type="text" id="cliente_id" name="cliente_id" required><br><br>
        
        <input type="submit" value="Generar y Guardar Factura">
    </form>

</body>

</html>
