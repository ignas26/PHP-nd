<?php

$title = "<h2>Klausomiausi ROCK subzanrai: </h2>";
    echo $title;
    
$subgenres = array(1 => "doom metal", 2 => "progrock", 3 => "grunge", 4 => "power metal");

foreach ($subgenres as $key => $subgenre){
// echo $key."<br>", $subgenre."<br>";

$subgenres = "<h3><br><i> $key $subgenre</i></h3>";
echo $subgenres;
}


?>
