<?php
require 'phpmailer/PHPMailerAutoload.php';

if (isset($_POST['pateikti'])){
    $name = $_POST['vardas'];
    $email = $_POST['emailAdresas'];
    $body = $_POST['zinute'];
    $subject = $POST['tema'];

    sendemail('zaromskis.w@gmail.com', $email, $name, $body, $subject, $attachment = "");

    header('Location: index.php');
    exit();
}

if (isset($_POST['submit'])){
    $name = $_POST['vardas'];
    $email = $_POST['elpastas'];
    $body = $_POST['komentaras'];
    $subject = "Kursiu Nerijos forma";
    $file = "attachment/" . basename($_FILES['vartotojo-failas']['name']);

    move_uploaded_file($_FILES['vartotojo-failas']['tmp_name'], $file);
    sendemail('zaromskis.w@gmail.com', $email, $name, $body, $subject, $file);

    header( 'Location: index.php#eile-lankytoju-patirtis' ) ;
    exit();
}

function sendemail($to, $from, $fromName, $body, $subject, $attachment) {
    $mail = new PHPMailer();
    $mail->setFrom($from, $fromName);
    $mail->addAddress($to);
    $mail->addAttachment($attachment);
    $mail->Subject = $subject . " " . $from;
    $mail->Body = $body;
    $mail->isHTML(false);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'zaromskis.w@gmail.com';
    $mail->Password = 'Wizards0';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    return $mail->send();
}

 ?>
