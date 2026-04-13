


<?php
include("../Config/bd_Tarifa.php");

$accion = $_GET['accion'];

switch ($accion) {

     case 'listar':
        $tarifa = Tarifa::obtenerTodos();
        include("../Vista/admin/tarifa/tarifa.php");
        break;
        
    case 'crear':
        include("../Vista/admin/tarifa/crearTarifa.php");
        break;

    case 'guardar':
        Tarifa::insertar(
            $_POST['fecha'],
            $_POST['precio'],
            $_POST['nombre'],
            
        );
        header("Location: ../Controlador/controlTarifa.php?accion=listar");
        break;

    case 'editar':
        $tarifa = Tarifa::obtenerPorId($_GET['id']);
        include("../Vista/admin/tarifa/editarTarifa.php");
        break;

    case 'actualizar':
        Tarifa::actualizar(
            $_POST['id'],
            $_POST['fecha'],
            $_POST['precio'],
             $_POST['nombre'],
            
        );
        header("Location: ../Controlador/controlTarifa.php?accion=listar");
        break;
   

    case 'eliminar':
        Tarifa::eliminar($_GET['id']);
        header("Location: ../Controlador/controlTarifa.php?accion=listar");
        break;
}
?>