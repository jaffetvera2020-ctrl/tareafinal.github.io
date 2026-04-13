<?php
session_start();

if (!isset($_SESSION['rol_id']) || $_SESSION['rol_id'] !=1) {
    header("Location: ../login.php");
    exit();
}
  ?> 

<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>

<a href="../Controlador/controlJugador.php?accion=crear" class="btn">
    ➕ Nuevo Jugador
</a>
<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Rol</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $usuarios->fetch_assoc()){ ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['correo'] ?></td>
    <td><?= $fila['telefono'] ?></td>
    <td><?= $fila['rol'] ?></td>
    <td class="acciones">
        <a class="eliminar" href="../Controlador/controlJugador.php?accion=eliminar&id=<?= $fila['id'] ?>">
            🗑 Eliminar
        </a>

        <a class="editar" href="../Controlador/controlJugador.php?accion=editar&id=<?= $fila['id'] ?>">
            ✏️ Editar
        </a>
    </td>
</tr>
<?php } ?>
</table>
<a href="../Vista/admin/administradorVista.php">regresar</a> 
</body>
</html>


