<?php
include("../Config/conexion.php");

class Horario {

    public static function obtenerTodos() {
        global $conn;
        $sql = "SELECT * FROM horarios_juego";
        return $conn->query($sql);
    }

    public static function insertar($fecha, $inicio, $fin) {
        global $conn;

        $sql = "INSERT INTO `horarios_juego`( `fecha`, `hora_inicio`, `hora_fin`) 
        VALUES ('$fecha','$inicio','$fin')";
        return $conn->query($sql);
    }

    public static function obtenerPorId($id) {
        global $conn;
        $sql = "SELECT * FROM horarios_juego WHERE id = $id";
        return $conn->query($sql)->fetch_assoc();
    }

    public static function actualizar($id, $fecha, $hora_inicio, $hora_fin) {
        global $conn;
        $sql = "UPDATE `horarios_juego` 
                SET `fecha`='$fecha',`hora_inicio`='$hora_inicio',`hora_fin`='$hora_fin'
                WHERE `id`='$id'";
        return $conn->query($sql);
    }

    public static function eliminar($id) {
        global $conn;
        $sql = "DELETE FROM horarios_juego WHERE id=$id";
        return $conn->query($sql);
    }
}












?>