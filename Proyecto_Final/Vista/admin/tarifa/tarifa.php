
<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Tarifas</h2>


<a class="btn" href="../Controlador/controlTarifa.php?accion=crear">Nuevo Tarifa</a>
<table >
<tr>
    <th>id</th>
    <th>Fecha</th>
    <th>Precio</th>
    <th>Jugadores</th>
     <th>Acciones</th>
</tr>

<?php while($fila = $tarifa->fetch_assoc()){ ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['fecha'] ?></td>
    <td><?= $fila['greenfee'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td class="acciones">
        <a class="eliminar" href="../Controlador/controlTarifa.php?accion=eliminar&id=<?= $fila['id'] ?>">
            Eliminar
        </a> |
        <a class="editar" href="../Controlador/controlTarifa.php?accion=editar&id=<?= $fila['id'] ?>">Editar</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
