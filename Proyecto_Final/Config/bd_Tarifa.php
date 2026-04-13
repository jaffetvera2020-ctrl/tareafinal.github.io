<?php
include("../Config/conexion.php");

class Tarifa {

    public static function obtenerTodos() {
        global $conn;
        $sql = "SELECT * FROM tarifa";
        return $conn->query($sql);
    }

    public static function insertar($fecha, $greenfee, $nombre ) {
        global $conn;

        $sql = "INSERT INTO tarifa(`fecha`,`greenfee`,`nombre`) 
        VALUES ('$fecha','$greenfee','$nombre')";
        return $conn->query($sql);
    }

    public static function obtenerPorId($id) {
        global $conn;
        $sql = "SELECT * FROM tarifa WHERE id = $id";
        return $conn->query($sql)->fetch_assoc();
    }

    public static function actualizar($id, $fecha, $greenfee, $nombre ) {
        global $conn;
        $sql = "UPDATE tarifa 
                SET `fecha`='$fecha',`greenfee`='$greenfee',`nombre`='$nombre'
                WHERE `id`='$id'";
        return $conn->query($sql);
    }

    public static function eliminar($id) {
        global $conn;
        $sql = "DELETE FROM tarifa WHERE id=$id";
        return $conn->query($sql);
    }
}
