<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">
        <input type="text" name="name" value="">
        <input type="text" name="surname" value="">
        <input type="email" name="email" value="">
        <input type="submit" name="submit value" value="go">
    </form>

    <?php
    $host = "localhost";
$user = "root";
$password = "";
$db = "duombaze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "
    SELECT * FROM author a
    LEFT JOIN posts p 
    ON p.id = a.id";
$author = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($author);
echo '<pre>';
    
    if (isset ($_POST['name'])){
        $_POST['name'] = $vardas;}
    if (isset ($_SESSION['name'])){
        $_SESSION['name'] = $vardas;}
    

    

    
    
//nepabaigta !
    ?>


</body>

</html>
