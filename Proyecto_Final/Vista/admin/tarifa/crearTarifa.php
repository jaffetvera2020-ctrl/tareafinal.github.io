<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Tarifas</h2>

<form action="../Controlador/controlTarifa.php?accion=guardar" method="POST">
    <input type="date" name="fecha" required>
    <input type="number" step="0.01" name="precio" placeholder="Green Fee" required>
        <select name="nombre">
            <option value="">numero de jugador</option>
            <option value="1 jugador">1 jugador</option>
            <option value="2 jugador">2 jugador</option>
            <option value="3 jugador">3 jugador</option>
            <option value="4 jugador">4 jugador</option>
        </select> 
    <button type="submit">Agregar</button>
</form>
</body>
</html>