<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
     <link rel="stylesheet" href="../Modelo/jugador.css">
</head>
<body>
<h2>Tarifas</h2>



<table border="1">
<tr>
    <th>id</th>
    <th>Fecha</th>
    <th>Precio</th>
    <th>Jugadores</th>
     
</tr>

<?php while($fila = $tarifa->fetch_assoc()){ ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['fecha'] ?></td>
    <td><?= $fila['greenfee'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    
</tr>
<?php } ?>
</table>
<a href="../Vista/jugador/juagador.php">regresar</a> 
</body>
</html>