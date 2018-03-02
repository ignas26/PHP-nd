<?php

class Dziaukas 
{
    public $icon_url = null;
    public $id = null;
    public $url = null;
    public $joke = null;

function __construct($icon_url, $id, $url, $joke) {
        
        $this->icon_url =$icon_url;
        $this->id =$id;
        $this->url =$url;
        $this->joke =$joke;
    }
function saveJokes(){
       
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "duombaze";
            $dsn = "mysql:host=$host;dbname=$db";
            $pdo = new PDO($dsn, $user, $password);
           
$sql = "INSERT INTO chuckster (icon_url, id_varchar, url, value) VALUES (:icon_url, :id_varchar, :url, :value)";

$sth =$pdo->prepare($sql);

    $data = [
            'icon_url' => $this->icon_url,
            'id_varchar' => $this->id,
            'url' => $this->url,
            'value' => $this->joke ];
        
    $sth->execute($data); } }


for ($i = 1; $i <= 5; $i++) {
    $url = "https://api.chucknorris.io/jokes/random";
    $data = json_decode(file_get_contents($url),true);
    $jokes = new Dziaukas($data["icon_url"], $data["id"], $data["url"], $data["value"]);
    $jokes->saveJokes();
    echo "ikoneles adresas:".$jokes->icon_url."<br><br>";
    echo "unikalus dziauko identifikacijos nr.:".$jokes->id."<br><br>";
    echo "dziauko adresas:".$jokes->url."<br><br>";
    echo "dienos Chuck Norris dziaukas:<h3>".$jokes->joke."</h3><br><br>";}


    
//zinau, kad kartais islenda "category" masyvas, bandziau patikrinti (su !empty or foreach ciklu), kad apimtu ir ji, bet nepavko, mesdavo error ir i duombaze irasydavo tik viena joke, todel nei objekto aprasyme "category" teko istrinti.






















?>
