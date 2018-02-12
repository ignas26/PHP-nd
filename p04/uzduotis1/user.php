<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <?php
    

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
$_SESSION['username'] = $username;

    header("Location: index.php");
    //$_SESSION['username'] = "Ignas";

    ?>

</body>

</html>
