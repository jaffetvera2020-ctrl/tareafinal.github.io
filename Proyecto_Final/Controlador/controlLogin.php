
<?php
session_start();
include("../Config/conexion.php");

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM jugadores WHERE correo ='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    if (password_verify($contrasena, $usuario['contraseña'])) {

        
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['rol_id'] = $usuario['rol_id'];
            $_SESSION['nombre'] = $usuario['nombre'];
            
            $rol = $usuario['rol_id'];

            if ($rol == 1) {
                header("Location: ../Vista/admin/administradorVista.php");
            } elseif ($rol == 2) {
                header("Location: ../Vista/jugador/juagador.php");
            }
            exit();
            

    } else {
         echo "Contraseña incorrecta";   
    }
} else {
        echo "Usuario no encontrado";
        }
?>