<form id="pedidoForm" action="agregar_pedido.php" method="POST">
    <label for="codigo_seguimiento">Código de Seguimiento:</label>
    <input type="text" id="codigo_seguimiento" name="codigo_seguimiento" readonly>
    <button type="button" id="generarCodigo">Generar Código</button>

    <label for="producto">Producto:</label>
    <select id="producto" name="producto_id">
        <?php
        // Conexión a la base de datos
        $conn = new mysqli('localhost', 'root', '', 'lagartogrow_db');

        // Verificar conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Obtener productos disponibles
        $sql = "SELECT id, nombre_producto FROM producto";
        $result = $conn->query($sql);

        // Mostrar opciones de productos
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre_producto'] . "</option>";
            }
        } else {
            echo "<option value=''>No hay productos disponibles</option>";
        }

        // Cerrar conexión
        $conn->close();
        ?>
    </select>
        <link rel="stylesheet" href="../css/seguimientostyle.css">

    <label for="estado">Estado del Pedido:</label>
    <select id="estado" name="estado">
        <option value="Pedido Confirmado">Pedido Confirmado</option>
        <option value="Pedido en transito">Pedido en transito</option>
        <option value="Entregado">Entregado</option>
        <option value="Cancelado">Cancelado</option>
    </select>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required>

    <button type="submit">Agregar Pedido</button>
</form>


