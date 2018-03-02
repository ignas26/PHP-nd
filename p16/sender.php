<?php
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PDO;
$user = "root";
$password = "";
$db="duombaze";
$dsn="mysql:host=localhost;dbname=".$db;
$pdo = new PDO($dsn, $user, $password);
$sql = "INSERT INTO laiskai (gavejas, tema, text) VALUES (:gavejas,:tema,:text)";
$sth = $pdo->prepare($sql);
$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {                
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'postmaster@sandboxfac3361eff2c45838c5543de6a7f7c03.mailgun.org';  // SMTP username
    $mail->Password = 'f38527d12a76dbcaa6e6fdb82baea481-e89319ab-ff66a111';  // SMTP password    
    $mail->Port = 587; // TCP port to connect to
    $mail->isHTML(true);     
    //is kur laiskas
    $mail->setFrom('metalyzstaz@gmail.com');
    if(isset($_POST["recipient"],$_POST["subject"],$_POST["text"])){
        $recipients = explode(",",$_POST["recipient"]);
        if(sizeof($recipients)>1){
            foreach($recipients as $index=>$recipient){
                $mail->addAddress($recipient);
                $mail->addReplyTo('noreply@noreply.re', 'No reply');
                $mail->Subject = $_POST["subject"];
                $mail->Body = $_POST["text"];
                $mail->send();
                $data=[
                    "gavejas" => $recipient,
                    "tema" => $_POST["subject"],
                    "text" => $_POST["text"]
                ];
                $sth->execute($data);
            };
        }else{
             //Kam laiskas
            $mail->addAddress($_POST["recipient"]);     // Add a recipient
            //Kam atsakyti
            $mail->addReplyTo('noreply@noreply.re', 'No reply');
            //Content    
            $mail->Subject = $_POST["subject"];
            $mail->Body    = $_POST["text"];
            //send mail
            $mail->send();
            $data=[
                "gavejas" => $_POST["recipient"],
                "tema" => $_POST["subject"],
                "text" => $_POST["text"]
            ];
            $sth->execute($data);
            header("Location:index.php");
        };
        header("Location:index.php");      
    }else{
        echo "Nepakankama nurodyta informacija";
    };
} catch (Exception $e) {
    echo 'Nedaskrido balandziai <img draggable="false" class="emoji" alt="🙁" src="https://s.w.org/images/core/emoji/2.4/svg/1f641.svg"> Mailer Error: ', $mail->ErrorInfo;
};