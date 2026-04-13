
<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Editar Horario</h2>

<form action="../Controlador/controlHorarios.php?accion=actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $horario['id'] ?>">

    Fecha: <input type="date" name="fecha" value="<?= $horario['fecha'] ?>"><br>
    Inicio: <input type="time" name="inicio" value="<?= $horario['hora_inicio'] ?>"><br>
    Fin: <input type="time" name="fin" value="<?= $horario['hora_fin'] ?>"><br>

    <br>

    <button type="submit">Actualizar</button>
    
</form>
</body>
</html>
