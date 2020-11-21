<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$ingresarUsuario = $_POST['ingresarUsuario'];
$ingresarContrasena = $_POST['ingresarContrasena'];
$ingresarTipo = $_POST['ingresarTipo'];

if ($ingresarTipo == 0) {
    $respuesta = array('respuesta' => 'seleccion');
    echo json_encode($respuesta);
    return;
} else {
    if ($ingresarTipo == 1) {
        $sql = "SELECT * FROM usuario
        WHERE email = '$ingresarUsuario' 
        AND contrasena = '$ingresarContrasena' AND rol_usuario_rol_usuario_ID = '$ingresarTipo'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 1;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['email'] = $row['email'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'supervisor'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 2) {
        $sql = "SELECT * FROM usuario WHERE email = '$ingresarUsuario' 
        and contrasena = '$ingresarContrasena' and descripcion = '$ingresarTipo'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 2;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['email'] = $row['email'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'director'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    }
}

mysqli_close($conexion);
