<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="user name" required>
        <input type="password" name="password" placeholder="password" value="" required>
        <input type="email" name="email" placeholder="e-mail" required>
        <input type="text" name="name" placeholder="name" required>
        <input type="submit" value="atlikti" id="submit">
    </form>


    <?php
    
    $host = "localhost";
$user = "root";
$password = "";
$db = "duombaze";
    
    $dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
  
    function insertUsers($db){
$sql = "INSERT INTO users (username, password, email, name) VALUES (:username, :password, :email, :name)";
    
$sth = $db->prepare($sql);
    
    $sth->bindParam(':username', $username);
    $sth->bindParam(':password', $password);
    $sth->bindParam(':email', $email);
    $sth->bindParam(':name', $name);
    
    $username = null;
        if (isset ($_SESSION['username'])){
    $username = $_SESSION['username'];}

    $password = null;
        if (isset ($_SESSION['password'])){
    $password = $_SESSION['password'];}
        
    $email = null;
    if (isset ($_SESSION['email'])){
    $email = $_SESSION['email'];}
    
    $name = null;
     if (isset ($_SESSION['name'])){
    $name = $_SESSION['name'];}
        
    
       if ($sth->execute()){
            header("Location: login.php");}
        //nepavyksta nuimti echo "Users inserted!" po page refresh
    }
    
    insertUsers($pdo);

    
    
if(isset($_SESSION['username']))
{
    echo "<h2>Welcome back ".$_SESSION['username']."</h2>";
    unset($_SESSION['username']);
}
    

    
    
?>




</body>

</html>
