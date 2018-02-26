<?php
    require "vendor/autoload.php";
    
    use src\Student;
    use src\Module;
    use src\Mark;

    $student = new Student;
    echo $student->getInfo();
    $module = new Module;
    echo $module->getInfo();
    $mark = new Module;
    echo $mark->getInfo();

//Fatal error: Uncaught Error: Class 'src\PDO' not found in C:\xampp\htdocs\backEnd\nd\p12\src\Student.php:26. Module ir Mark tas pats.
?>
