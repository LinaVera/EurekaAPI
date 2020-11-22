<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recuperar contraseña | Eureka </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<body>
    <div class="wrapper">
        <div id="formContent">
            <!-- Tabs Titles -->
            <div>
                <h4>
                    Recuperar contraseña
                </h4>
            </div>
            <!-- Login Form -->
            <form method="POST" action="model_recuperarContraseña.php">
                <input type="email" id="txtCorreoElectronico" name="txtCorreoElectronico" placeholder="Correo Electrónico">      
                <div class="loginButton">
                    <input type="submit" value="Enviar Contraseña">
                </div>                
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="login.php">Volver a iniciar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>