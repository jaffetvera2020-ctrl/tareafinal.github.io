<!DOCTYPE html>
<html>
<head>
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../Modelo/administrador.css">
</head>
<body>
<h2>Editar Jugador</h2>

<form action="../Controlador/controlJugador.php?accion=actualizar" method="POST">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

    Usuario: <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>"><br>
    Email: <input type="email" name="correo" value="<?= $usuario['correo'] ?>"><br>
    telefono: <input type="text" name="telefono" value="<?= $usuario['telefono'] ?>"><br>

    Rol:
    <select name="role_id">
        <option value="1" <?= $usuario['rol_id']==1?'selected':'' ?>>Administrador</option>
        <option value="2" <?= $usuario['rol_id']==2?'selected':'' ?>>Jugador</option>
       
    </select><br>

    <button type="submit">Actualizar</button>
    
</form>
</body>
</html>