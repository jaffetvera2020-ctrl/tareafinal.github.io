<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>

<div class="form-container">
    <h2>Editar Registro</h2>
    <form action="../Controlador/controlReserva.php?accion=actualizar" method="POST">
           <input type="hidden" name="id" value="<?= $reserva['id'] ?>">

        <input type="number" name="id_horario" value="<?= $reserva['horario_id'] ?>" required>
        <input type="date" name="fecha" value="<?= $reserva['fecha'] ?>">
        <input type="time" name="hora" value="<?= $reserva['hora'] ?>">
        <select name="estado">
                <option value="Reservado" <?= $reserva['estado']=="Reservado" ?'selected':'' ?>>Reservado</option>
                <option value="Cancelado" <?= $reserva['estado']=="Cancelado" ?'selected':'' ?>>Cancelado</option>
        </select><br>

        <input type="number" name="id_tarifa" value="<?= $reserva['tarifa_id'] ?>">
        <button type="submit">Guardar</button>
       
    </form>
</div>

</body>
</html>