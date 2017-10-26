<?php
    print_r($_GET);
    $klientoELPastas = $_GET['elpastas'];
    $klientoAntraste = $_GET['antraste'];
    $klientoKlausimas = $_GET['klausimas'];
    echo "<br>";
    echo $klientoELPastas . "<br>";
    echo $klientoAntraste . "<br>";
    echo $klientoKlausimas . "<br>";

   //Load composer's autoloader
   require './PHPMailer-master/PHPMailerAutoload.php';

   $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
   try {
       //Server settings
       $mail->SMTPDebug = 3;                                 // Enable verbose debug output
       $mail->isSMTP();                                      // Set mailer to use SMTP
       $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
       $mail->SMTPAuth = true;                               // Enable SMTP authentication
       $mail->Username = 'zaromskis.w@gmail.com';                 // SMTP username
       $mail->Password = 'Wizards0';                           // SMTP password
       $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
       $mail->Port = 587;                                    // TCP port to connect to

       //Recipients
       $mail->setFrom( $klientoELPastas, 'Klientas');
       $mail->addAddress('zaromskis.w@gmail.com', 'Puslapio kurejas');     // Add a recipient
       $mail->addReplyTo($klientoELPastas, 'Information');

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
