<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../public/css/root.css">
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>

<body>
    <main>
        <!-- SECCIÓN IZQUIERDA -->
        <section class="secction-left">
            <div class="brand-content">
                <img src="../../../public/img/logo_simbolo.png" alt="Logo de AR Holding">
                <span class="brand-name">AR HOLDING SAC</span>
                <h1>Bienvenido al <br>espacio de trabajo</h1>
                <span class="brand-divider"></span><br>
                <p class="brand-description">Portal de personal de AR Holding SAC. Para acceder a las herramientas iniciar sesión.</p>
            </div>
            <div class="brand-footer">
                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                <span>Acceso exclusivo para personal autorizado</span>
            </div>
            <small class="copyright">© 2026 AR Holding SAC · Uso interno</small>
        </section>

        <!-- SECCIÓN DERECHA -->
        <section class="secction-rigth">
            <div class="login-container">
                <div class="login-card">
                    <div class="login-eyebrow">
                        <span class="security-icon"><i class="bi bi-shield-check" aria-hidden="true"></i></span>
                        <span>PORTAL DEL PERSONAL</span>
                    </div>
                    <h2>Inicia sesión</h2>
                    <p class="login-intro">Ingrese sus credenciales para acceder al sistema.</p>

                    <form action="#" method="post">
                        <label for="username">Usuario</label>
                        <div class="input-wrap">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            <input id="username" name="username" type="text" placeholder="Ingresa tu usuario" autocomplete="username" required>
                        </div>

                        <label for="password">Contraseña</label>
                        <div class="input-wrap">
                            <i class="bi bi-lock" aria-hidden="true"></i>
                            <input id="password" name="password" type="password" placeholder="Ingresa tu contraseña" autocomplete="current-password" required>
                            <button class="password-toggle" type="button" aria-label="Mostrar contraseña"><i class="bi bi-eye" aria-hidden="true"></i></button>
                        </div>

                        
                        <button class = "ingresar-button" type="submit">Ingresar al sistema <i class="bi bi-arrow-right" aria-hidden="true"></i></button>
                    </form>
                    
                </div>
            </div>
        </section>
    </main>
</body>

</html>
