<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
     <link rel="stylesheet" href="../Modelo/jugador.css">
</head>
<body>
<h2>Horarios</h2>


<table border="1">

<tr>
    <th>ID</th>
    <th>Fecha</th>
    <th>Inicio</th>
    <th>Fin</th>
    
</tr>

<?php while($fila = $horario->fetch_assoc()){ ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['fecha'] ?></td>
    <td><?= $fila['hora_inicio'] ?></td>
    <td><?= $fila['hora_fin'] ?></td>
    
</tr>

<?php } ?>
</table>
<a href="../Vista/jugador/juagador.php">regresar</a> 
</body>
</html>
