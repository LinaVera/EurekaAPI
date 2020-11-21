<?php

require_once '../controlador/conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contraseña = $_POST['contrasena'];
$repitaLaContraseña = $_POST['contrasena2'];

if($contraseña == $repitaLaContraseña){

$sql = "INSERT INTO usuario (nombre, apellido, documento, direccion, telefono, email, contrasena,rol_usuario_rol_usuario_ID) 
VALUES ('$nombre', '$apellido', '$documento', '$direccion', '$telefono','$email', '$contraseña', 2)";

$ejecutar = mysqli_query($conexion, $sql);
if ($ejecutar) {
    $respuesta = array(
        'respuesta' => 'exito'
    );
} else {
    $respuesta = array(
        'respuesta' => 'error'
    );
}
echo json_encode($respuesta);

mysqli_close($conexion);

}