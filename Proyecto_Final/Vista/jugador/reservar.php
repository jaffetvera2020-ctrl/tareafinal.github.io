<?php
session_start();

?>

<p>
    Tu ID es: <?= $_SESSION['usuario_id'] ?>
</p> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../../Modelo/jugador.css">
</head>
<body>

<div class="form-container">
    <h2>reserva</h2>
    <form action="../../Controlador/controlJugador.php?accion=listarReserva" method="POST">


        <input type="number" name="id" placeholder="ID" required>
        <input type="number" name="id_horario" placeholder="ID_Horario" required>
        <input type="date" name="fecha" placeholder="Fecha" required>
        <input type="time" name="hora" placeholder="Hora" required>
        <select name="estado">
                <option value="Reservado" >Reservado</option>
        </select><br>
        <input type="number" name="id_tarifa" placeholder="ID_Tarifa" required>
        <button type="submit">Reservar</button>
      
    </form>
    <a href="../jugador/juagador.php">regresar</a> 
</div>

</body>
</html>