<?php

include("../Config/conexion.php");

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$telefono = $_POST['telefono'];
$rol_id = $_POST['rol'];

$sql = "INSERT INTO  jugadores  (`nombre`, `correo`, `contraseña`, `telefono`,`rol_id`)
VALUES ('$nombres', '$email', '$contrasena', '$telefono','$rol_id')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado";
} else {
    echo "Error: " . $conn->error;
}
header("Location: ../Vista/login.php");

?>