<?php

class Student{
    
    public $student_no = null;
    public $surname = null;
    public $forename = null;

public function __construct($student_no, $surname, $forename){
   $this->student_no = $student_no;
   $this->surname = $surname;
   $this->forename = $forename;
    }
public function save(){
     include_once('duombaze.php');
}
    
}

$students = new Student("20060106", "Zlatkus", "Ignas");
echo $students->student_no;
echo $students->surname;
echo $students->forename;




class Module{
    public $module_code = null;
    public $module_name = null;
    
    public function __construct($module_code, $module_name){
   $this->module_code = $module_code;
   $this->module_name = $module_name;
    }
    
    public function save(){
     include_once('duombaze.php');
}
}

$modules = new Module("CM0005", "Coding");
echo $modules->module_code;
echo $modules->module_name;




class Mark{
    public $student_no = null;
    public $module_code = null;
    public $mark = null;
 
    public function __construct($student_no, $module_code, $mark){
   $this->student_no = $student_no;
   $this->module_code = $module_code;
   $this->mark = $mark;
    }
    
    public function save(){
    include_once('duombaze.php');
}

}

$marks = new Mark("20060106", "CM0005", "25");
echo $marks->student_no;
echo $marks->module_code;
echo $marks->mark;

?>
