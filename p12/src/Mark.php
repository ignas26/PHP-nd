<?php
   
namespace src{
   class Mark {
    public $student_no = null;
    public $module_code = null;
    public $mark = null;
 
    public function __construct($student_no, $module_code, $mark){
   $this->student_no = $student_no;
   $this->module_code = $module_code;
   $this->mark = $mark;
    }
        public function getInfo(){
           return "Cia tiesiog mark!";
       }
    
    public function save(){
        
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);
        
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
}
?>