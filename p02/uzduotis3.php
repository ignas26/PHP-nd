<?php

/*
Darome prielaidą, kad turime 2 emocines būsenas – happy (laimingas) ir sad (liūdnas). Parašykite funkciją į kurią paduodant emocinę būseną (sad arba happy) ji grąžintų atitinkamą šypsenėlę vietoj būsenos, t.y. jeigu būsena sad, šypsenėlė – :-(, jeigu būsena  – happy, šypsenėlė – :-), jeigu būsena nėra atpažinta, šypsenėlė – :-|. Išveskite rezultatą panaudodami anksčiau sukurtas funkcijas tam, kad HTML dokumente išvesti tokią eilutę – <h1>Jūsų vardas</h1> is _Jūsų būsenos šypsenėlė_ today! Rezultatas turėtų atrodyti daug maž šitaip: – Darjuš is 🙂 today!

*/

function emotion($happy, $sad, $neutral){

    if ($happy == ":-)")
    {
        echo "$happy <br>";
    }
        
    elseif ($sad == ":-(")
    {
        echo "$sad <br>";
    }
        
    
    elseif ($neutral == ":-|")
    {
    echo "$neutral <br>";
        
    
}
    
    
}
     function vardas($pirmasParametras = "Ignas"){

$vrd = new DOMDocument();
$vrd->loadHTML("<html><body><br><br><h1>$pirmasParametras is $happy today!</h1><br></body></html>");
echo $vrd->saveHTML();
        }

emotion(":-)", ":-(", ":-|");
 vardas();

?>
