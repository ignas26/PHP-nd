<?php


class Drink{
    
    protected $name = null;
    
    protected function setDrinkName($name){
        $this->name = $name;
    }

public function getDrinkName(){
    return $this->name;
}
    
    
}

$drink = new Drink();




class Coffee extends Drink
{
    
        public function __construct(){
       $this->setDrinkName("COFFEE");
    }
    
    
}



$coffee = new Coffee;
echo "My new drink is:".$coffee->getDrinkName();

?>