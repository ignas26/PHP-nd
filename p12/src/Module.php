<?php 
namespace src;
use PDO;

class Module {
    public $module_code = null;
    public $module_name = null;
    
    public function __construct($module_code, $module_name){
   $this->module_code = $module_code;
   $this->module_name = $module_name;
    }
     public function getInfo(){
           return "Cia tiesiog module!";
       }
    
    public function save(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);
                 
        $sql = "
    INSERT INTO modules (module_code, module_name) VALUES (:module_code, :module_name)";

            $sth = $pdo->prepare($sql);
        
            $sth->execute([
                'module_code' => $this->module_code,
                'module_name' => $this->module_name
            ]);
}
}
?>