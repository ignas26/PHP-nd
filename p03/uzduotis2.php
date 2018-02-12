<?php

/* Išrinkite iš masyvo visus vaisius (angl. fruits) ir atspausdinkite jų pavadinimą, bei galutinę kainą (kaina = quantity*price). P.S. darome prielaidą, kad čia tiesiog kiekis ir nežiūrim ar čia kilogramai, ar gramai, ar tiesiog kiekis. Po apačia tą patį padarykite su daržovėmis (angl. vegetables). */

   $shopping_cart = [
       [
           'type' => 'vegetables',
           'name' => 'potato',
           'quantity' => '10',
           'price' => '1.0'
       ],
       [
           'type' => 'vegetables',
           'name' => 'onion',
           'quantity' => '5',
           'price' => '0.5'
       ],
       [
           'type' => 'vegetables',
           'name' => 'cucumber',
           'quantity' => '2',
           'price' => '1.2'
       ],
        [
           'type' => 'fruits',
           'name' => 'banana',
           'quantity' => '2',
           'price' => '1.0'
        ],
        [
           'type' => 'fruits',
           'name' => 'apple',
           'quantity' => '3',
           'price' => '1.2'
        ]
   ];


//vaisiai

$pricebanana = $shopping_cart['3']['quantity'] * $shopping_cart['3']['price']."<br>";
$priceapple = $shopping_cart['4']['quantity'] * $shopping_cart['4']['price'];

echo "<h1>".$shopping_cart['3']['type'].":"."</h1>";
echo $shopping_cart['3']['name'], $pricebanana, $shopping_cart['4']['name'], $priceapple;

//darzoves
$pricepotato = $shopping_cart['0']['quantity'] * $shopping_cart['0']['price']."<br>";
$priceonion = $shopping_cart['1']['quantity'] * $shopping_cart['1']['price']."<br>";
$pricecucumber = $shopping_cart['2']['quantity'] * $shopping_cart['2']['price']."<br>";


echo "<h1>".$shopping_cart['0']['type'].":"."</h1>";
echo $shopping_cart['0']['name'], $pricepotato, $shopping_cart['1']['name'], $priceonion, $shopping_cart['2']['name'], $pricecucumber;

?>
