<?php

// 1 uzduoties kintamieji

$type = "cat";
$name = "Tim";
$age = 1;
$weight = 3.6;



echo '1 uzdavinys';
echo ":  ";

if ($type = "cat" && $name = "Tim") {
echo "$name is a $type"; 
} else { echo "$name is not a $type!";}

echo "<br> <br> ";

//2 uzduoties kintamieji

$price = 582;

echo '2 uzdavinys';
echo ":   ";


if ($price > 500 && $price <600){
    echo 'Price is big enough';
} else if ($price >600 && $price < 700) {
    echo 'OMG!';
} else {echo 'Price is ok';}





?>