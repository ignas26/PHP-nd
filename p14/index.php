
<?php
require_once('vendor/autoload.php');

$faker = Faker\Factory::create();

$author = $faker->name; 
$authorPost = $faker->text;
$time = $faker->date($format = 'Y-m-d', $max = 'now');


function nameGenerator($author, $authorPost, $time){
//    global $authorPost;
//    global $author;
//    global $time;
    for ($i=0; $i < 1000; $i++) {
echo $author, "\n";
echo $authorPost, "\n";
echo $time, "\n";

}
}
nameGenerator($author, $authorPost, $time);

//nesigauna is ciklo pasiimti rezultato t.y. 1000 irasu (tik viena pagal default).




class Komentaras {
 
public $author = null;
public $authorPost = null;
public $time = null;


public function __construct($author, $authorPost, $time){
$this->author = $author;
$this->authorPost = $authorPost;
$this->time = $time;
}
   
public function save(){
$host = "localhost";
$user = "root";
$password = "";
$db = "duombaze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);

            $sql = "
INSERT INTO comments (author, comment, created_at) VALUES (:author, :comment, :created_at)";
    
            $sth = $pdo->prepare($sql);
  
            $sth->execute([
                'author' => $this->author,
                'comment' => $this->authorPost,
                'created_at' => $this->time,
            ]);
}
}

$commented = new Komentaras($author, $authorPost, $time);
$commented->save();

?>