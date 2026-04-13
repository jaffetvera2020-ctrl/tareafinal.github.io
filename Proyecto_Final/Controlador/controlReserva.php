
<?php
include("../Config/bd_Reserva.php");

$accion = $_GET['accion'];

switch ($accion) {

     case 'listar':
        $reserva = Reserva::obtenerTodos();
        include("../Vista/admin/reservas/reservas.php");
        break;
        
    case 'crear':
        include("../Vista/admin/reservas/crearReservas.php");
        break;

    case 'guardar':
        Reserva::insertar(
            $_POST['id'],
            $_POST['id_horario'],
            $_POST['fecha'],
             $_POST['hora'],
            $_POST['estado'],
            $_POST['id_tarifa'],
        );
        header("Location: ../Controlador/controlReserva.php?accion=listar");
        break;

    case 'editar':
        $reserva = Reserva::obtenerPorId($_GET['id']);
        include("../Vista/admin/reservas/editarReservas.php");
        break;

    case 'actualizar':
        Reserva::actualizar(
            $_POST['id'],
            $_POST['id_horario'],
            $_POST['fecha'],
            $_POST['hora'],
            $_POST['estado'],
            $_POST['id_tarifa'],
            
        );
        header("Location: ../Controlador/controlReserva.php?accion=listar");
        break;
   

    case 'eliminar':
        Reserva::eliminar($_GET['id']);
        header("Location: ../Controlador/controlReserva.php?accion=listar");
        break;
}
?>