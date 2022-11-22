<?php
  
  use PHPMailer\PHPMAiler\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exeption.php';
  require 'phpmailer/src/PHPMailer.php';
  require 'phpmailer/src/SMTP.php';

  if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->host = 'smtp.gmail.com';
    $smail->SMPTAuth = true;
    $mail->Username ='royilao28@gmail.com';
    $mail->Password = 'zyosyfohoxsgbmwi';
    $mail->Port = '465';

    $mail->setFrom('royilao28@gmail.com');

    $mail->addAddress($_POST["email"]);

    $email->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'front.php';

    </script>
    ";
  }


?>