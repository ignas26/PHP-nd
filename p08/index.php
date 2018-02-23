    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);
    $sql = "
    SELECT st.student_no, st.surname, st.forename, ms.module_code, ms.mark, md.module_name FROM students st
    LEFT JOIN marks ms
    ON ms.student_no = st.student_no
    LEFT JOIN modules md
    on md.module_code = ms.module_code";
    $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($students);
    echo '<pre>';

?>




