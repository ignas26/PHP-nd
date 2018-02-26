<?php
    require "vendor/autoload.php";
    
    use src\Student;
    use src\Module;
    use src\Mark;

    $student = new Student("20060106", "Zlatkus", "Ignas");
    echo $student->getInfo();
    $student->save();
    $module = new Module("CM0005", "Coding");
    echo $module->getInfo();
    $module->save();
    $mark = new Mark("20060106", "CM0005", "25");
    echo $mark->getInfo();
    $mark->save();
?>
