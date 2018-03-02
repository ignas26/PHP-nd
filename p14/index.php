<?php
require_once('vendor/autoload.php');

$host = "localhost";
$user = "root";
$password = "";
$db = "duombaze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);

            $sql = "
INSERT INTO comments (author, comment, created_at) VALUES (:author, :comment, :created_at)";
    
            $sth = $pdo->prepare($sql);
  
$faker = Faker\Factory::create();

// Pastaba: 1000 irasu pakeista i 30, kadangi paduodant daugiau nei 50 i duombaze phpMyAdmin pradeda puliuoti ir meta timeout, neiseina istrinti iskarto visu irasu, error 
// "Warning: a form on this page has more than 1000 fields. On submission, some of the fields might be ignored, due to PHP's max_input_vars configuration." Pakeiciau php.ini, // bet nepadejo vistiek.

for ($i=0; $i < 30; $i++) {
            $comments=[
                'author' => $faker->name,
                'comment' => $faker->text,
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now')];
     $sth->execute($comments); }


class Database{
    private $host = "localhost";
    private $db_name = "duombaze";
    private $username = "root";
    private $password = "";
    public $conn;
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage(); }
        return $this->conn; } }

class Komentarai{
    private $db = null;
    public function __construct($db){
        $this->db = $db;
    }
    public function getAllComments(){
        $sql = "SELECT * FROM comments";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_OBJ);
    } };

$database = new Database();
$db = $database->getConnection();
$commented = new Komentarai($db);
$allComments = $commented->getAllComments();

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

echo json_encode($allComments);














?>
