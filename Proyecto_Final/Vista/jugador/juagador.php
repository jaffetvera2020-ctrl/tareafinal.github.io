<?php
session_start();

if (!isset($_SESSION['rol_id']) || $_SESSION['rol_id'] != 2) {
    header("Location: ../login.php");
    exit();
}
  ?> 
<!DOCTYPE html>
<html>
<head>
    <title>Panel Jugador</title>
    <link rel="stylesheet" href="../../Modelo/jugador.css">
</head>
<body>
<div class="form-container">
 <h1>Panel de Jugador</h1>
<p>
    Tu ID es: <?= $_SESSION['usuario_id'] ?>
</p> 
<nav>
    
    <a href="../../Controlador/controlJugador.php?accion=listarHorario">Horarios</a> |
    <a href="../../Controlador/controlJugador.php?accion=listarTarifa">Tarifa</a> |
    <a href="../../Controlador/controlJugador.php?accion=verReserva">Ver reserva</a> |
    <a href="../jugador/reservar.php">Reservas</a> |
</nav>

<hr>
<div class="logout">
    <a href="../../Controlador/logout.php">Cerrar sesión</a>
</div>   
</div>

 

</body>
</html>