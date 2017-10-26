<?php

print_r($_GET);

$klientoElPastas = $_GET['elpastas'];
$klientoAntraste = $_GET['antraste'];
$klientoKlausimas = $_GET['klausimas'];

echo $klientoElPastas . "<br />";
echo $klientoAntraste . "<br />";
echo $klientoKlausimas . "<br />";

//Load composer's autoloader
require './PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testascoding@gmail.com';                 // SMTP username
    $mail->Password = 'slaptazodis';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($klientoElPastas, 'Klientas');
    $mail->addAddress('testascoding@gmail.com', 'Stardas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoElPastas, 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoAntraste;
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

 ?>
