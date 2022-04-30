<?php
include_once './database.php';
require_once './PHPMailer.php';
require_once './SMTP.php';
session_start();
if (isset($_POST['email'])){
    $server = new ConnectionServer();
    $conexion = $server->getConnection();
    $correo = $_POST['email'];
    $sql = "SELECT * FROM usuarios WHERE email='$correo'";
    $result = mysqli_query($conexion, $sql);
    $contar = mysqli_num_rows($result);
  
    if ($contar == 1){
        $datos = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        //Creacion del token
        $id = $datos["udi"];
        $nombre = $datos["nombre"];
        $apellido = $datos["apellidos"];
        $token = base64_encode(sha1(uniqid(rand(),true)));

        try {
          $actualizar = "UPDATE usuarios SET token = '$token' WHERE email = '$correo'";
          $resultado = mysqli_query($conexion, $actualizar);
          $mail = new PHPMailer(true);
          
          //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'terramastertutoshd@gmail.com';                     //SMTP username
    $mail->Password   = 'SoundBlaster345';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('terramastertutoshd@gmail.com', 'MoonHotel');
    $mail->addAddress($correo, $nombre);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Recuperar Contraseña en MoonHotel';
        $mail->Body    = '<h3>Para recuperar la contraseña, deberás seguir las indicaciones</h3><ol><li>Dale clic al enlace: <b><a href="http://localhost/template/pages/new_password.php ?token='.$token.'"> Aquí</a></b> </li><li>Guarda tu nueva contraseña para que no te pierdas de las actualizaciones.</li><li>Inicia sesión nuevamente.</li></ol>';
        $mail->AltBody = 'Este es un correo de MoonHotel para recuperar tu contraseña';

    $mail->send();
    echo 'Message has been sent';

        }catch(Exception $e){
         
        }


        $server->closeConnection();
     }else{
            $server->closeConnection();
        }
    }

?>