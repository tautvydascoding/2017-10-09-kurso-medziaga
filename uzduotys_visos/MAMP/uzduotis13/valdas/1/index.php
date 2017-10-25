<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>PHP</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <h1>PHP POST and GET in forms</h1>

        <form class="" action="index.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" value=""> <br>
            <label for="text">Subject</label>
            <input type="text" name="subject" value=""> <br>
            <label for="">Tekstas</label> <br>
            <textarea name="text" rows="8" cols="80"></textarea> <br>
            <input type="submit" name="" value="Submit">
        </form>

    </body>
</html>

<?php

if ($_POST) {

        $user_email = $_POST["email"];
        $subject = $_POST["subject"];
        $text = $_POST["text"];


    if ($user_email && $subject && $text) {

        //Load composer's autoloader
        require './PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'amigolituano@gmail.com';                 // SMTP username
            $mail->Password = 'testpassword1';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($user_email, 'Klientas');
            $mail->addAddress('amigolituano@gmail.com', 'Puslapio kurejas');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo($user_email, 'Atsakymas');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $text;
            $mail->AltBody = $text;

            $mail->send();
            $success = "Message has been sent";
            echo $success;

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}

?>
