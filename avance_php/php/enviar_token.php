<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../php/PHPMailer-master/Exception.php';
require '../php/PHPMailer-master/PHPMailer.php';
require '../php/PHPMailer-master/SMTP.php';

include 'conexión_BD.php';


$correo = $_POST['correo'];
$query="SELECT * FROM cliente WHERE Correo= '$correo' ";
$result=$conexion->query($query);



/*$validar_correo = mysqli_query($conexion, "SELECT * FROM cliente WHERE Correo= '$correo' " );
if (isset($_POST['correo'])) {
    $correo = $_POST['correo'];
    // resto del código
} else {
    echo "No se ha recibido el valor de correo";
    exit;
}
if(mysqli_num_rows($validar_correo) > 0){*/

if($result->num_rows > 0){
    /*$fila = mysqli_fetch_assoc($validar_correo);
    $id = $fila['ID'];*/
    

$mail = new PHPMailer(true);

try {
    //configurar servidor 
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tina_creativa@outlook.com';                     //SMTP username
    $mail->Password   = 'Escolar.oficina';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tina_creativa@outlook.com', 'Tina');
    $mail->addAddress('juangelin.18@gmail.com', 'juangelyn');    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola este es un correo generado para solicitar tu recuperación de contraseña.
     Por favor, visita la página <a href="http://localhost:3000/Project_nuevo/Login/Restablecer%20contrase%C3%B1a.php?id='.$row['id'].'"> Recuperación de contraseña</a> ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location:../Login/Login.php?message=Ok");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("location:../Login/Login.php?message=Error");
/*}
} else {
    echo "Las contraseñas no coinciden.";
}
} else {
echo "Por favor, ingrese una nueva contraseña.";
}
} else {
header("location:../Login.php?message=not_found");
}*/
}

}
else{
    header("location:../Login/Login.php?message=not_found");
  
   
}
?>