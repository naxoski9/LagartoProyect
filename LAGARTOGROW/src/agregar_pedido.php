<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Pedido</title>
    <link rel="stylesheet" href="../css/seguimientopedido.css">
</head>

<body>
    <h1>Agregar Pedido</h1>
    <form action="guardar_pedido.php" method="POST">
        <label for="codigo_seguimiento">Código de Seguimiento:</label>
        <input type="text" id="codigo_seguimiento" name="codigo_seguimiento" value="<?php echo generarCodigoSeguimiento(); ?>" readonly>

        <label for="estado">Estado del Pedido:</label>
        <select id="estado" name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="enviado">Enviado</option>
            <option value="entregado">Entregado</option>
            <option value="cancelado">Cancelado</option>
        </select>

        <button type="submit">Agregar Pedido</button>
    </form>

    <?php
    function generarCodigoSeguimiento() {
        return strtoupper(uniqid('PED-'));
    }
    ?>
</body>

</html>
