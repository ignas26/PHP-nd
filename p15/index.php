<?php require_once "vendor/autoload.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ulwq7ed2mcrob63ncxzy0026wqwhpwd6h2v360g2roz8q7y1"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="gavejas" id="" placeholder="nurodykite gaveja">
        <input type="text" name="tema" id="" placeholder="laisko tema">
        <textarea name="text" id="" cols="10" rows="5">
</textarea>
        <input name="send" type="submit" value="send your letter">
    </form>


    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
   
$host = "localhost";
$user = "root";
$password = "";
$db="duombaze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);  
$sql = "INSERT INTO laiskai (gavejas, tema, text) VALUES (:gavejas, :tema, :text)";
$sth = $pdo->prepare($sql);
$mail = new PHPMailer(true); // Passing `true` enables exceptions
    
    try {            
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'postmaster@sandboxfac3361eff2c45838c5543de6a7f7c03.mailgun.org';                 // SMTP username
    $mail->Password = 'f38527d12a76dbcaa6e6fdb82baea481-e89319ab-ff66a111';                           // SMTP password    
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->isHTML(true);  
    //is kur laiskas
    $mail->setFrom('ignuccio@gmail.com');
    //Kam laiskas
        
     if(isset($_POST["gavejas"])){
       $gavejuDaugetas = explode(",",$_POST["gavejas"]);    
            foreach($gavejuDaugetas as $key=>$receiver){
    $mail->addAddress($receiver);
            }}
        
    //$mail->addAddress($gavejuDaugetas);    // Add a recipient
    //Kam atsakyti
    $mail->addReplyTo('noreply@noreply.re', 'No reply');
    //Content    
        if(isset ($_POST['tema'])){
    $mail->Subject=$_POST['tema'];
};    
    $mail->AltBody = 'Cia nera htmlo, nes ne visi EMAIL klientai ji palaiko';
    if(isset ($_POST['text'])){
    $mail->Body=$_POST['text'];
};
    //send mail
      if(isset($_POST["gavejas"], $_POST["tema"], $_POST["text"])){
        $data=[
                "gavejas" => $_POST["gavejas"],
                "tema" => $_POST["tema"],
                "text" => $_POST["text"]
            ];
      }  
    if(isset ($_POST['send'])){
       if(null !== $mail->send()){
        $sth->execute($data);
       echo 'Balandziai nunese laiska...';
       } 
}
    } catch (Exception $e) {
    echo 'Nedaskrido balandziai <img draggable="false" class="emoji" alt="🙁" src="https://s.w.org/images/core/emoji/2.4/svg/1f641.svg"> Mailer Error: ', $mail->ErrorInfo;
}
?>
</body>

</html>
