<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Modelo/ogin.css">
</head>
<body>
    <div class="login-container">
      <h1>GOLF</h1>  
    </div>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="../Controlador/controlLogin.php" method="POST">
        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>

        <button type="submit">Ingresar</button>
        <a href="registro.php">Registrarse</a>
    </form>
</div>

</body>
</html>