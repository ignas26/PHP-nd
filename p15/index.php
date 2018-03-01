<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ulwq7ed2mcrob63ncxzy0026wqwhpwd6h2v360g2roz8q7y1"></script>
      <script>tinymce.init({
         selector:'textarea',
         plugins: 'paste, image'
    });</script>
</head>
<body>
<form action="" method="post">
<textarea name="text" id="" cols="3" rows="1">
</textarea>
<input name="send" type="submit" value="submit">
</form>


<?php
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true); // Passing `true` enables exceptions
    try {
                    
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'postmaster@sandboxfac3361eff2c45838c5543de6a7f7c03.mailgun.org';                 // SMTP username
    $mail->Password = 'f38527d12a76dbcaa6e6fdb82baea481-e89319ab-ff66a111';                           // SMTP password    
    $mail->Port = 587;                                    // TCP port to connect to
    //is kur laiskas
    $mail->setFrom('ignuccio@gmail.com');
    //Kam laiskas
    $str = 'ignuccio@gmail.com,slender@man.lt';
    $mail->addAddress(explode(',',$str));     // Add a recipient
    //Kam atsakyti
    $mail->addReplyTo('noreply@noreply.re', 'No reply');
    //Content    
    $mail->Subject = 'Oooo! Veikia!';
    $mail->isHTML(true);      
    $mail->AltBody = 'Cia nera htmlo, nes ne visi EMAIL klientai ji palaiko';
    if(isset ($_POST['text'])){
    $mail->Body=$_POST['text'];
};
    //$mail->Body = "<h4>Sveiki, gal parduodate <b style='color:#f49542;'>morkas?<b/> <h4>";
    //send mail
    if(isset ($_POST['send'])){
        $mail->send();
        echo 'Balandziai nunese laiska...';
    }
} catch (Exception $e) {
    echo 'Nedaskrido balandziai <img draggable="false" class="emoji" alt="🙁" src="https://s.w.org/images/core/emoji/2.4/svg/1f641.svg"> Mailer Error: ', $mail->ErrorInfo;
}

?>


</body>
</html>