<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Editar Tarifa</h2>

<form action="../Controlador/controlTarifa.php?accion=actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $tarifa['id'] ?>">

    Fecha: <input type="date" name="fecha" value="<?= $tarifa['fecha'] ?>"><br>
    Precio: <input type="number" step="0.01" name="precio" value="<?= $tarifa['greenfee'] ?>"><br>
       <select name="nombre">
            <option value="">numero de jugador</option>
            <option value="1 jugador"<?= $tarifa['nombre']=="1 jugador"?'selected':'' ?>>1 jugador</option>
            <option value="2 jugador"<?= $tarifa['nombre']=="2 jugador"?'selected':'' ?>>2 jugador</option>
            <option value="3 jugador"<?= $tarifa['nombre']=="3 jugador"?'selected':'' ?>>3 jugador</option>
            <option value="4 jugador"<?= $tarifa['nombre']=="4 jugador"?'selected':'' ?>>4 jugador</option>
        </select> 
       <br>
    <button type="submit">Actualizar</button>
    
</form>
</body>
</html>