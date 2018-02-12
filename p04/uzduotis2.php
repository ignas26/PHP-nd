<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>




    <?php

    
       $user = array(
        'username' => "admin",
        'password' => "admin123"
    );
    
function checkUser($username, $password, $user)

{
    global $user;
     if($username == $user['username'] && $password == $user['password']){
return true;
     
     } else {return false;}

}



?>




</body>

</html>
