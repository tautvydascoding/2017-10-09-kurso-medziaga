<?php

//reikia issisaugoti duomenis:

print_r($_GET); //viskas matosi url laukelyje, kad nesimatytu reikia naudot POST metoda; get reiktu naudot jei nereikalingi passwords; o pvz tik kazkoks klausimas;

$klientoPastas = $_GET['pastas'];
$klientoAntraste = $_GET['antraste'];
$klientoKlausimas = $_GET['klausimas'];

//patikrinti ar is tikro ima info:
echo $klientoPastas . "<br/>";
echo $klientoAntraste . "<br/>";
echo $klientoKlausimas . "<br/>";


//Load composer's autoloader
require './PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 //kuo didesnis skaicius, tuo daugiau errors parodys, pvz 0 nerodytu nieko net jei butu error;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dar3mo.test@gmail.com';                 // SMTP username
    $mail->Password = 'slaptazodis626';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    
    
    //CIA REIKIA SUDELIOTI KINTAMUOSIUS:
    echo $klientoPastas;
    //Recipients
    $mail->setFrom($klientoPastas, 'Klientas');
    $mail->addAddress('dar3mo.test@gmail.com', 'Kurejas');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional cia galima siust keliem zmonem
    $mail->addReplyTo($klientoPastas, 'Information');
    //$mail->addCC('cc@example.com');  
    //$mail->addBCC('bcc@example.com');

    //Attachments/ GALIMA PPRIDETI FAILU, bet reiktu browse laukelio
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content/ siunciamo laisko tekstas.
    $mail->isHTML(true);                                  // Set email format to HTML/ kokiu formatu siunciams laiskas
    $mail->Subject = $klientoAntraste;
    $mail->Body    = $klientoKlausimas;  //email tekstas
    $mail->AltBody = $klientoKlausimas; 

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>