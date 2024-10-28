<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Lagarto Grow</title>
    <link rel="stylesheet" href="../LAGARTOGROW/css/style.css">
</head>
<body>
    <div class="login-container"></div>
        <div class="login-box">
            <h2>Ingreso Sistema</h2>
            <form onsubmit="validateLogin(event)">
                <input type="text" id="username" placeholder="Usuario" required>
                <input type="password" id="password" placeholder="Contraseña" required>
                <button type="submit">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <script>
        function validateLogin(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'Sebastian Cariaga' && password === 'SebastianCariaga777') {
                location.href = '../LAGARTOGROW/src/index.html'; 
            } else {
                alert('Nombre de usuario o contraseña incorrectos');
            }
        }
    </script>
</body>
</html>