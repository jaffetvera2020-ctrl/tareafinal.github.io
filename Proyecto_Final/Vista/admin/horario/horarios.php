
<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Horarios</h2>


<a class="btn" href="../Controlador/controlHorarios.php?accion=crear">Nuevo Horario</a>
<table >

<tr>
    <th>Fecha</th>
    <th>Inicio</th>
    <th>Fin</th>
    <th>Accion</th>
</tr>

<?php while($fila = $horario->fetch_assoc()){ ?>
<tr>
    <td><?= $fila['fecha'] ?></td>
    <td><?= $fila['hora_inicio'] ?></td>
    <td><?= $fila['hora_fin'] ?></td>
    <td class="acciones">
        <a class="eliminar" href="../Controlador/controlHorarios.php?accion=eliminar&id=<?= $fila['id'] ?>">
            Eliminar
        </a> |
        <a class="editar" href="../Controlador/controlHorarios.php?accion=editar&id=<?= $fila['id'] ?>">Editar</a>
    </td>
</tr>

<?php } ?>
</table>
</body>
</html>


