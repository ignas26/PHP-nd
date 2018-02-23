    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);

?>