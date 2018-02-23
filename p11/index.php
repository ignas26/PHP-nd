<?php

class Student {
    
    public $student_no = null;
    public $surname = null;
    public $forename = null;

public function __construct($student_no, $surname, $forename){
   $this->student_no = $student_no;
   $this->surname = $surname;
   $this->forename = $forename;
    }
 
    
public function save(){
     include('duombaze.php');


         $sql = "
    INSERT INTO students (student_no, surname, forename) VALUES (:student_no, :surname, :forename)";

        
            $sth = $pdo->prepare($sql);
        
            $sth->execute([
                'student_no' => $this->student_no,
                'surname' => $this->surname,
                'forename' => $this->forename
            ]);
}
}

$students = new Student("20060106", "Zlatkus", "Ignas");
$students->save();


class Module {
    public $module_code = null;
    public $module_name = null;
    
    public function __construct($module_code, $module_name){
   $this->module_code = $module_code;
   $this->module_name = $module_name;
    }
    
    public function save(){
     include('duombaze.php');
                 
        $sql = "
    INSERT INTO modules (module_code, module_name) VALUES (:module_code, :module_name)";

            $sth = $pdo->prepare($sql);
        
            $sth->execute([
                'module_code' => $this->module_code,
                'module_name' => $this->module_name
            ]);
}
}

$modules = new Module("CM0005", "Coding");
$modules->save();



class Mark {
    public $student_no = null;
    public $module_code = null;
    public $mark = null;
 
    public function __construct($student_no, $module_code, $mark){
   $this->student_no = $student_no;
   $this->module_code = $module_code;
   $this->mark = $mark;
    }
    
    public function save(){
        
        include('duombaze.php');
        
         $sql = "
    INSERT INTO marks (student_no, module_code, mark) VALUES (:student_no, :module_code, :mark)";

            $sth = $pdo->prepare($sql);
        
            $sth->execute([
                'student_no' => $this->student_no,
                'module_code' => $this->module_code,
                'mark' => $this->mark
            ]);    
}
}

$marks = new Mark("20060106", "CM0005", "25");
$marks->save();


?>
