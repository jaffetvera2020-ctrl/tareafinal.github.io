<?php
include("../Config/conexion.php");

class Reserva {

    public static function obtenerTodos() {
        global $conn;
        $sql = "SELECT * FROM tee_times";
        return $conn->query($sql);
    }

    public static function insertar($jugador_id, $horario_id, $fecha,$hora, $estado, $tarifa_id) {
        global $conn;

        $sql = "INSERT INTO `tee_times`( `jugador_id`, `horario_id`, `fecha`, `hora`, `estado`, `tarifa_id`) 
        VALUES ('$jugador_id','$horario_id','$fecha','$hora','$estado','$tarifa_id')";
        return $conn->query($sql);
    }


    public static function obtenerPorId($id) {
        global $conn;
        $sql = "SELECT * FROM tee_times WHERE id = $id";
        return $conn->query($sql)->fetch_assoc();
    }

    public static function actualizar($id, $horario_id, $fecha, $hora, $estado, $tarifa_id) {
        global $conn;
        $sql = "UPDATE `tee_times` 
                SET  `horario_id`='$horario_id', `fecha`='$fecha', `hora`='$hora', `estado`='$estado', `tarifa_id`='$tarifa_id'
                WHERE `id`='$id'";
        return $conn->query($sql);
    }

    public static function eliminar($id) {
        global $conn;
        $sql = "DELETE FROM tee_times WHERE id=$id";
        return $conn->query($sql);
    }
}












?>