<?php

session_start();


//$_SESSION['message'] = $neimas;

//$vardas = $_POST['name'];
//$_SESSION['message'] = $vardas;
//echo $vardas;


$neimas = $_POST['nm'];
$_SESSION['nm']= $neimas;

$passw = $_POST['passw'];
$_SESSION['passw']= $passw;

//$user = array(
    //'username' => "admin",
    //'password' => "admin123"
//); bus is duombazes info

//$_SESSION['welcome']= $user;
//var_dump($user);


header("Location: login.php");




?>