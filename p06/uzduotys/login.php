<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <form action="user.php" method="POST">
        <input type="text" name="nm" placeholder="username" style='font-color-pink' required>
        <input type="password" name="passw" placeholder="password" value="" required>
        <input type="submit" value="Prisijungti">
    </form>






    <?php

// NEPABAIGTAS PRISIJUNGIMAS, REIKIA PERSIKELTI IS DUOMBAZES DUOMENIS KAIP MASYVA IR PANAUDOTI I FUNKCIJA
    
/* function checkUser($username, $password, $user ){
   
    if(isset($_SESSION['nm']) && isset($_SESSION['passw'])){
        if($username === $user["username"] && $password===$user["password"]){
            echo "<h2 style='color:green'>Admin, You are logged in! :)</h2>";
            unset($_SESSION['name']);
            unset($_SESSION['pass']);
             
        } else if($username !== $user["username"] || $password!==$user["password"]) {
            echo "<h2 style='color:red'>$username, Your password is wrong!</h2>";
            unset($_SESSION['name']);
            unset($_SESSION['pass']);
        }
    } else {
        
        echo "<h2 style='color:blue'>Homework 4 completed</h2>";
         
    }
*/





echo "Users inserted!";
    ?>
    
</body>

</html>
