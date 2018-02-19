    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);
    $sql = "
    SELECT * FROM marks m
LEFT JOIN modules md
ON md.id = m.id";
    $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($students);
    echo '<pre>';

//gavosi tik tiek padaryti, kreipiantis i student_no ir module_code meta klaidas. Foreign key uzdeti irgi neleidzia.

?>