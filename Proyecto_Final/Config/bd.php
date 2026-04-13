<?php
include("../Config/conexion.php");

class Usuario {

    public static function obtenerTodos() {
        global $conn;
        $sql = "SELECT jugadores.id,jugadores.nombre,jugadores.correo,jugadores.telefono, roles.nombre AS rol 
                FROM jugadores 
                JOIN roles ON jugadores.rol_id = roles.id";
        return $conn->query($sql);
    }

    public static function insertar($name, $email, $password, $telefono, $role_id) {
        global $conn;
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO jugadores (`nombre`, `correo`, `contraseña` ,`telefono`, `rol_id`)
                VALUES ('$name', '$email', $password,'$telefono','$role_id')";
        return $conn->query($sql);
    }

    public static function obtenerPorId($id) {
        global $conn;
        $sql = "SELECT * FROM jugadores WHERE id = $id";
        return $conn->query($sql)->fetch_assoc();
    }

    public static function actualizar($id, $name, $email, $telefono, $role_id) {
        global $conn;
        $sql = "UPDATE jugadores 
                SET nombre='$name', correo='$email',telefono=$telefono,rol_id=$role_id
                WHERE id=$id";
        return $conn->query($sql);
    }

    public static function eliminar($id) {
        global $conn;
        $sql = "DELETE FROM jugadores WHERE id=$id";
        return $conn->query($sql);
    }

    public static function obtenerTodosTarifa() {
        global $conn;
        $sql = "SELECT * FROM tarifa";
        return $conn->query($sql);
    }

    public static function obtenerTodosHorario() {
        global $conn;
        $sql = "SELECT * FROM horarios_juego";
        return $conn->query($sql);
    }


    public static function insertarReserva($jugador_id, $horario_id, $fecha,$hora, $estado, $tarifa_id) {
        global $conn;

        $sql = "INSERT INTO `tee_times`( `jugador_id`, `horario_id`, `fecha`, `hora`, `estado`, `tarifa_id`) 
        VALUES ('$jugador_id','$horario_id','$fecha','$hora','$estado','$tarifa_id')";
        return $conn->query($sql);
    }
    public static function verReserva() {
        global $conn;
        session_start();
        $usuario_id = $_SESSION['usuario_id'];
        $sql = "
SELECT tee_times.id,jugadores.nombre,horarios_juego.hora_inicio,horarios_juego.hora_fin,tarifa.nombre  AS jugadores,tarifa.greenfee
                FROM tee_times 
                JOIN horarios_juego ON horarios_juego.id = tee_times.horario_id
                JOIN jugadores ON jugadores.id = tee_times.jugador_id
                JOIN tarifa ON tarifa.id = tee_times.tarifa_id WHERE jugadores.id='$usuario_id'";
        return $conn->query($sql);
    }

}












?>