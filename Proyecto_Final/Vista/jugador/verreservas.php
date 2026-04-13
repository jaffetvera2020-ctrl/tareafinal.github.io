<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
     <link rel="stylesheet" href="../Modelo/jugador.css">
</head>
<body>
<h2>Reservas</h2>
<br>

<table border="1">
<tr>
    <th>ID</th>
    <th>nombre</th>
    <th>hora_inicio</th>
    <th>hora_fin</th>
    <th>jugador</th>
    <th>greenfee</th>
   
    
</tr>

<?php while($fila = $reserva->fetch_assoc()){ ?>

<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['hora_inicio'] ?></td>
    <td><?= $fila['hora_fin'] ?></td>
    <td><?= $fila['jugadores'] ?></td>
    <td><?= $fila['greenfee'] ?></td>
    
</tr>

<?php } ?>

</table>
<a href="../Vista/jugador/juagador.php">regresar</a> 
</body>
</html>