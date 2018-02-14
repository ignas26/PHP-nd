<?php
session_start();
    
$useris = $_POST['username'];
$_SESSION['username'] = $useris;
$email = $_POST['email'];
$_SESSION['email']= $email;
$password = $_POST['password'];
$_SESSION['password']= $password;
$vardas = $_POST['name'];
$_SESSION['name']= $vardas;




header("Location: index.php");



?>