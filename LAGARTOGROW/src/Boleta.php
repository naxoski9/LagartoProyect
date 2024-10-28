<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Lagarto Grow - Boleta/Factura</title>
    <link rel="stylesheet" href="../css/seguimiento.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="user-section">
                <span class="user-icon">👤</span>
                <p>Sebastian Admin</p>
            </div>
            <nav class="menu">
                <ul>
                    <li><button onclick="location.href='inventario.php'">📦 Inventario</button></li>
                    <li><button onclick="location.href='proveedores.php'">🛒 Proveedores</button></li>
                    <li><button onclick="location.href='seguimiento.php'">📊 Seguimiento</button></li>
                    <li><button onclick="location.href='boleta.php'">🧾 Boleta/Factura</button></li>
                </ul>
            </nav>
            <button class="logout-button" onclick="location.href='../login.html'">Cerrar Sesión</button>
        </aside>

        <main class="main-content">
            <header class="header">
                <img src="/img/lagarto.jpg" alt="Lagarto Grow Logo" class="logo">
                <h1>Sistema Lagarto Grow</h1>
            </header>

            <div class="search-container">
                <input type="text" placeholder="Buscar">
                <button>Buscar</button>
            </div>

            <!-- Formulario para emitir boleta/factura -->
            <form action="emitir_boleta.php" method="POST">
                <div class="button-group">
                    <h3>Datos del Cliente</h3>
                    <input type="text" name="cliente" placeholder="Cliente" required>
                    <input type="text" name="nmro_documento" placeholder="Nmr. documento" required>
                    <input type="text" name="direccion" placeholder="Dirección" required>
                    <input type="text" name="metodo_pago" placeholder="Método de pago" required>
                    <input type="date" name="fecha_emision" required>

                    <h3>Datos del Producto</h3>
                    <input type="text" name="codigo_producto" placeholder="Código del Producto" required>
                    <input type="number" name="cantidad" placeholder="Cantidad" required>
                    <input type="text" name="precio_total" placeholder="Precio Total" required>

                    <button type="submit" class="emitir-button">Emitir</button>
                    <button type="button" class="cancel-button" onclick="location.href='boleta.html'">Cancelar</button>
                </div>
            </form>

            <div class="button-Borrar">
                <form action="borrar_boleta.php" method="POST">
                    <input type="text" name="pedido_id" placeholder="ID del pedido a borrar">
                    <button type="submit">Borrar</button>
                </form>
            </div>

        </main>
    </div>
</body>

</html>