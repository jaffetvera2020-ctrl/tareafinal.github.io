<h2>Horarios</h2>

<form action="../Controlador/controlHorarios.php?accion=guardar" method="POST">
    <input type="date" name="fecha" required>
    <input type="time" name="inicio" required>
    <input type="time" name="fin" required>
    <button type="submit" name="accion" value="guardar">Agregar</button>
</form>