<?php
namespace src;
use PDO;

   class Student {
    
    public $student_no = null;
    public $surname = null;
    public $forename = null;

public function __construct($student_no, $surname, $forename){
   $this->student_no = $student_no;
   $this->surname = $surname;
   $this->forename = $forename;
    }
       public function getInfo(){
           return "Cia tiesiog studentas!";
       }
 
    
public function save(){
 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);

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
?>