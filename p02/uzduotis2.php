<?php

/* Parašykite funkciją, kuri turės 2 parametrus. Pirmas parametras tai tekstinė eilutė.  Paduodame į funkciją tekstinę eilutę (pirmas parametras) ir tikrinam antro parametro reikšmę, jeigu antro parametro reikšmė TRUE atspausdinti eilutę HTML dokumente kaip HTML antraštę (angl. heading), jei antro parametro reikšmė FALSE  – tiesiog atspausdinti eilutę. Plius patikrinti ar yra paduodamas pirmas parametras (tekstinė eilutė). Jeigu parametras nėra paduodamas grąžinti (verta prisimint, kad grąžinti nelygu atspausdinti 🙂 ) loginę reikšmę FALSE. */


function work($antrasParametras, $pirmasParametras = "tekstas"){
    
    if($antrasParametras == True){
   
        function vardas($pirmasParametras = "tekstas"){

$vrd = new DOMDocument();
$vrd->loadHTML("<html><body><br><br><h1>$pirmasParametras</h1><br></body></html>");
echo $vrd->saveHTML();
        if ($pirmasParametras !="tekstas") {return;}
        }
        vardas();
        
     }
elseif ($antrasParametras == False) {
     echo ($pirmasParametras);
     }
}

work("tekstas");


?>
