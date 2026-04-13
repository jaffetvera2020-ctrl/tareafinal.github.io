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
    <link rel="stylesheet" href="../../Modelo/administrador.css">
</head>
<body>

<h1>Panel de Administrador</h1>
<p>
    Tu ID es: <?= $_SESSION['usuario_id'] ?>
</p> 
<nav>
    <a href="../../Controlador/controlJugador.php?accion=listar">Jugadores</a> |
    <a href="../../Controlador/controlHorarios.php?accion=listar">Horarios</a> |
    <a href="../../Controlador/controlTarifa.php?accion=listar">Tarifa</a> |
    <a href="../../Controlador/controlReserva.php?accion=listar">Reservas</a> |
</nav>

<hr>

<div class="logout">
    <a href="../../Controlador/logout.php">Cerrar sesión</a>
</div>

</body>
</html>