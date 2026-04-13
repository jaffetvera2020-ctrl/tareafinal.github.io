


<?php
include("../Config/bd_Horario.php");

$accion = $_GET['accion'];

switch ($accion) {

     case 'listar':
        $horario = Horario::obtenerTodos();
        include("../Vista/admin/horario/horarios.php");
        break;
        
    case 'crear':
        include("../Vista/admin/horario/crearHorario.php");
        break;

    case 'guardar':
        Horario::insertar(
            $_POST['fecha'],
            $_POST['inicio'],
            $_POST['fin'],
        );
        header("Location: ../Controlador/controlHorarios.php?accion=listar");
        break;

    case 'editar':
        $horario = Horario::obtenerPorId($_GET['id']);
        include("../Vista/admin/horario/editarHorario.php");
        break;

    case 'actualizar':
        Horario::actualizar(
            $_POST['id'],
            $_POST['fecha'],
            $_POST['inicio'],
            $_POST['fin'],
            
        );
        header("Location: ../Controlador/controlHorarios.php?accion=listar");
        break;
   

    case 'eliminar':
        Horario::eliminar($_GET['id']);
        header("Location: ../Controlador/controlHorarios.php?accion=listar");
        break;
}
?>