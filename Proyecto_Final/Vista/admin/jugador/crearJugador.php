<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Jugadores</h2>

<form action="../Controlador/controlJugador.php?accion=guardar" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
     <select name="rol">
            <option value="0">Seleccione Rol</option>
            <option value="1">Administrador</option>
            <option value="2">Jugador</option>
        </select> 
    <button type="submit" >Agregar</button>
</form>
</body>
</html>