
<?php

    $user_name = $_POST["name"];
    $user_email = $_POST["email"];
    $subject = $_POST["subject"];
    $text = $_POST["text"];

if ($user_email && $subject && $text) {

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
        $mail->setFrom($user_email, $user_name);
        $mail->addAddress('amigolituano@gmail.com', 'Page owner');     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($user_email, 'Reply');
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
        echo "Thank you, $user_name. Message has been sent.";
        // echo '<meta http-equiv="refresh" content="0; url=http://localhost:8888/uzduotis13/valdas/1/index.php" />';  //redirect

    } catch (Exception $e) {
        echo 'Message could not be sent.';
    }

}

?>
