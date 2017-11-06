<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Montserrat+Alternates:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <title>Vinyl Records</title>
  </head>
  <body>
  <ul>
    <div class="baneris">
    <a href="index.html"><img src="logo-pink.png" alt=""></a>
    <li class="dropdown nav">
      <a href="javascript:void(0)" class="dropbtn">Shop</a>
      <div class="dropdown-content">
        <a href="vinyls.php">Vinyls</a>
        <a href="turntables.html">Turntables</a>
      </div>
    </li>
    <li class="nav"><a href="contact.php">Contact</a></li>
    <li class="nav"><a href="#home">About</a></li>
    <li class="nav"><a href="news.php">News</a></li>
  </div>
  </ul>

  <?
    // require_once("nav.php");

    if (isset($_POST['submit'])) {
      $klientoEmail = $_POST["email"];
      $klientoAntraste = $_POST["phone"];
      $klientoKlausimas = $_POST["message"];
      $klientoVardas = $_POST["name"];
      require 'PHPMailer-master/PHPMailerAutoload.php';

      $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
      try {
          //Server settings
          $mail->SMTPDebug = 3;                                 // Enable verbose debug output // buvo 2
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'zydrune.maciukaite@gmail.com';                 // SMTP username
          $mail->Password = 'hellno';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom( $klientoEmail, $klientoVardas);
          $mail->addAddress('zydrune.maciukaite@gmail.com', 'Creator');     // Add a recipient
          // $mail->addAddress('ellen@example.com');               // Name is optional
          $mail->addReplyTo($klientoEmail, 'Information');
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
          header('Location: contact.php');
      } catch (Exception $e) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      }
    }
  ?>

    <div class="contact-container">
      <div class="contact-form">
          <h1>SENT US A MESSAGE</h1>
          <p>We would love to hear from you!</p>
        <form action="contact.php" method="post">
          <input type="text" name="name" placeholder="Your name: " id="name" />
          <input type="email" name="email" placeholder="Your email: " id="email" />
          <input type="tel" name="phone" placeholder="Your phone number: " id="phone" />
          <textarea name="message" placeholder="Your message: "></textarea>
          <input type="submit" name="submit" value="SEND MESSAGE">
          <!-- <button type="submit">SEND MESSAGE</button> -->
        </form>
      </div>
      <!-- end of contact-form div -->
    </div>
    <!-- end of contact-container div -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
  </body>

  </html>
