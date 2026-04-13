<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../Modelo/estilo_registro.css">
</head>
<body>

<div class="form-container">
    <h2>Registro</h2>
    <form action="../Controlador/controlRegistro.php" method="POST">
        <input type="text" name="nombres" placeholder="Nombres" required>
        <input type="email" name="email" placeholder="Correo" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <select name="rol">
            <option value="">Seleccione Rol</option>
            <option value="1">Administrador</option>
            <option value="2">Jugador</option>
        </select> 

        <button type="submit">Registrarse</button>
        <a href="login.php"> Inicia secion</a>
    </form>
</div>

</body>
</html>