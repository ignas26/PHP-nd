<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">
        <input type="text" name="name" value="" placeholder="name">
        <input type="text" name="surname" value="" placeholder="surname">
        <input type="email" name="email" value="" placeholder="email">
        <input type="submit" name="submit value" value="submit">
    </form>

    <br>

    <form action="" method="post">
        <input type="text" name="title" value="" placeholder="title">
        <input type="text" name="content" value="" placeholder="content">
        <input type="submit" name="submit value" value="submit">

    </form>

    <form action="" method="post">
        <select name="author" id="">
    <option value="10">vard</option>
    <option value="11">auks</option>
    <option value="12">john</option>
</select> <br> Enter author name:
        <input type="text" name="posts" required>
        <input type="submit" value="Save">
    </form>

    <?php
$posts = null;
if(isset($_POST['posts'])){
    $parent_id = $_POST['author'];
    $posts_name = $_POST['posts'];
        
    storeCategories(['title' => $posts_name,'content' => $parent_id]);
    echo "added new sub category for category with ID ".$parent_id."<br>";
}
    ?>

        <?php
    function getDb(){
    $host = "localhost";
$user = "root";
$password = "";
$db = "duombaze";
$dsn = "mysql:host=$host;dbname=$db";
return new PDO($dsn, $user, $password);
    }
    

    $sql = "INSERT INTO author (name, surname, email) VALUES (:name, :surname, :email)";

        
        
    if (isset ($_POST['name'])){
       $vardas = $_POST['name'];}

        if (isset ($_POST['surname'])){
        $pavarde = $_POST['surname'];}

        if (isset ($_POST['email'])){
        $pastas = $_POST['email'];}
   
    
    
    $sth = getDb()->prepare($sql);



            $data = [
    'name' => $vardas,
    'surname' => $pavarde,
    'email' => $pastas
];            
    $sth->execute($data);
    
    
  print_r($data);

    function storeCategories(){
    $sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";    
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'title' => $parent_id,
    'content' => $posts_name
    ]);
    return $sth->rowCount();
}

    
//$author = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

//echo '<pre>';
//print_r($author);
//echo '<pre>';
      
         

    ?>


</body>

</html>
