<?php

print_r( $_GET );

$pasteliukas = $_GET['pasteliukas'];
$anterastuke = $_GET['antrastuke'];
$klausims = $_GET['klausymukas'];
"<br />" ;
echo $pasteliukas . "<br />" ;
echo $anterastuke . "<br />" ;
echo $klausims . "<br />" ;

//Load composer's autoloader
require './PHPMailer-master 2/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testukas.patestuks@gmail.com';                 // SMTP username
    $mail->Password = 'testaspatestas';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($pasteliukas , 'hiltis acb');
    $mail->addAddress('tastukas.patestuks@gmail.com', 'pro grameris');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($pasteliukas, 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $anterastuke;
    $mail->Body    = $klausims;
    $mail->AltBody = $klausims;

    $mail->send();
    header("Location: succes.php");
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


 ?>
