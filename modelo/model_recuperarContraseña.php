<?php
 require("../controlador/conexion.php");
 $correo = $_POST['txtCorreoElectronico'];
 $sql="SELECT nombre FROM usuario WHERE email='$correo'";
 $ejecutar ->query($sql);
 $rowcount ->num_rows($ejecutar);
 if($rowcount > 0 ){
     //Enviar el correo
     $mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = GMAIL_USERNAME;   //username
    $mail->Password = GMAIL_PASSWORD;   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('$correo', '');
    $mail->addAddress('RECEPIENT_EMAIL_ADDRESS', 'RECEPIENT_NAME');
 
    $mail->addAttachment(__DIR__ . '/attachment1.png');
    $mail->addAttachment(__DIR__ . '/attachment2.png');
 
    $mail->isHTML(true);
    $mail->Subject = 'Email Subject';
    $mail->Body    = '<b>Email Body</b>';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
     //......
 }
 else{
    $respuesta = array('respuesta' => 'error');  
    echo json_encode($respuesta);
 }
?>