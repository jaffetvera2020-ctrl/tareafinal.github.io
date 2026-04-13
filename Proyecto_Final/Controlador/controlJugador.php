


<?php
include("../Config/bd.php");

$accion = $_GET['accion'];

switch ($accion) {

     case 'listar':
        $usuarios = Usuario::obtenerTodos();
        include("../Vista/admin/jugador/jugadores.php");
        break;
        
    case 'crear':
        include("../Vista/admin/jugador/crearJugador.php");
        break;

    case 'guardar':
        Usuario::insertar(
            $_POST['nombre'],
            $_POST['correo'],
            $_POST['password'],
            $_POST['telefono'],
            $_POST['rol']
        );
        header("Location: ../Controlador/controlJugador.php?accion=listar");
        break;

    case 'editar':
        $usuario = Usuario::obtenerPorId($_GET['id']);
        include("../Vista/admin/jugador/editarJugador.php");
        break;

    case 'actualizar':
        Usuario::actualizar(
            $_POST['id'],
            $_POST['nombre'],
            $_POST['correo'],
            $_POST['telefono'],
            $_POST['role_id']
        );
        header("Location: ../Controlador/controlJugador.php?accion=listar");
        break;
   

    case 'eliminar':
        Usuario::eliminar($_GET['id']);
        header("Location: ../Controlador/controlJugador.php?accion=listar");
        break;

    case 'listarTarifa':
        $tarifa = Usuario::obtenerTodosTarifa();
        include("../Vista/jugador/verTarifa.php");
        break;

    case 'listarHorario':
        $horario = Usuario::obtenerTodosHorario();
        include("../Vista/jugador/verHorario.php");
        break;

    case 'listarReserva':
        Usuario::insertarReserva(
            $_POST['id'],
            $_POST['id_horario'],
            $_POST['fecha'],
             $_POST['hora'],
            $_POST['estado'],
            $_POST['id_tarifa'],
        );
        header("Location: ../Vista/jugador/juagador.php");

        break;
        case 'verReserva':
        
        $reserva = Usuario::verReserva();
        include("../Vista/jugador/verreservas.php");
        break;
}
?>