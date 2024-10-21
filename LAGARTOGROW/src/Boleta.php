<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Lagarto Grow</title>
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
                    <li><button onclick="location.href='inventario.html'">📦 Inventario</button></li>
                    <li><button onclick="location.href='proveedores.html'">🛒 Proveedores</button></li>
                    <li><button onclick="location.href='seguimiento.html'">📊 Seguimiento</button></li>
                    <li><button onclick="location.href='boleta.html'">🧾 Boleta/Factura</button></li>
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
            <div class="button-group">
                <button onclick="location.href='#'">Boleta/Factura</button>

            </div>
            <div class="button-Cancelar">
                <button onclick="location.href='#'">Cancelar</button>
            </div>
            <div class="button-Emitir">
                <button onclick="location.href='#'">Emitir</button>
            </div>
           
            <div class="card">
                <h2>Cliente
                </h2>
            </div>
            <div class="card">
                <h2>Nmro documento</h2>
            </div>
            <div class="card">
                <h2>Direccion</h2>
            </div>
            <div class="card">
                <h2>Metodo de pago</h2>
            </div>
            <div class="card">
                <h2>Fecha de Emision</h2>
            </div>
            <div class="card">
                <h2>Comprobante</h2>
            </div>
            <div class="new-card-section">
                <div class="card">
                    <h2>Producto</h2>
                </div>
                <div class="card">
                    <h2>Nmro producto</h2>
                </div>
                <div class="card">
                    <h2>Descripcion</h2>
                </div>
                <div class="card">
                    <h2>Descuento</h2>
                </div>
                <div class="card">
                    <h2>Cantidad</h2>
                </div>
                <div class="button-Borrar">
                    <button onclick="location.href='#'">Borrar</button>
                </div>
            </div>

        </main>
    </div>
    
        

</body>
</html>
