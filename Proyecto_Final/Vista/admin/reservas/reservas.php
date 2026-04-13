<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Reservas</h2>
<br>
<a class="btn" href="../Controlador/controlReserva.php?accion=crear">Nuevo Jugador</a>
<table >
<tr>
    <th>ID</th>
    <th>jugador_id</th>
    <th>horario_id</th>
    <th>fecha</th>
    <th>hora</th>
    <th>estado</th>
    <th>tarifa_id</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $reserva->fetch_assoc()){ ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['jugador_id'] ?></td>
    <td><?= $fila['horario_id'] ?></td>
    <td><?= $fila['fecha'] ?></td>
    <td><?= $fila['hora'] ?></td>
    <td><?= $fila['estado'] ?></td>
    <td><?= $fila['tarifa_id'] ?></td>
    <td class="acciones" >
        <a class="eliminar" href="../Controlador/controlReserva.php?accion=eliminar&id=<?= $fila['id'] ?>">
            Eliminar
        </a> |
        <a class="editar"  href="../Controlador/controlReserva.php?accion=editar&id=<?= $fila['id'] ?>">Editar</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>
