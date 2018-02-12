<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <form action="user.php" method="POST">
        <h3>Prisijungimo vardas:<br></h3>
        <input type="text" name="username">
        <br>
        <h3>Slaptazodis:<br></h3>
        <input type="password" value="" name="password">
        <br>
        <input type="submit" value="Prisijungti">
    
    </form>

    <?php
   
 //unset($_SESSION['username']);
             if(isset($_SESSION['username'])){

        echo "Sveikas sugrįžęs –".$_SESSION['username'];
    } else {return;}


?>



</body>

</html>
