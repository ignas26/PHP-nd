<?php

class Post
{
 private const MAX_LENGHT = 100;
private $title = null;
private $content = null;
private $author = null;
   
    
    //priskiria atitinkamu klases lauku reiksme
      public function setTitle ($title) {
    $this->title = $title;
    }
     //grazina atitinkamu klases lauku reiksme
    public function getTitle(){
         return $this->title;
    }
     //priskiria atitinkamu klases lauku reiksme
    public static function setContent($content){
        if(strlen($content) > self::MAX_LENGHT) {
            echo "Max length is: ".self::MAX_LENGHT."<br>";
        };
    }
     //grazina atitinkamu klases lauku reiksme
       public static function getContent(){ 
        return self::MAX_LENGHT;
       }
     //priskiria atitinkamu klases lauku reiksme
    public function setAuthor(Person $person){
        $this->author = $author;
    }
     //grazina atitinkamu klases lauku reiksme
        public function getAuthor(){
         return $this->author;
    }


}

$post = new Post();

$post->setTitle("My title");
$post->setContent("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s");
//$post->setAuthor($person); objektas setAuthor ir metodas setAuthor vis dar buginti!


echo $post->getTitle()."<br>";

echo $post->getAuthor()."<br>";



//------------------------


class Person
{

private $id = null;
private $name = null;

   
    
    //priskiria atitinkamu klases lauku reiksme
      public function setId ($id) {
    $this->id = $id;
    }
     //grazina atitinkamu klases lauku reiksme
    public function getId(){
         return $this->id;
    }
     //priskiria atitinkamu klases lauku reiksme
    public function setName($name){
        $this->name = $name;
    }
     //grazina atitinkamu klases lauku reiksme
       public function getName(){ 
        return $this->name;
       }


}

$person = new Person();
$person->setName("John");
$person->setId(10);

echo $person->getName()."<br>";
echo $person->getId()."<br>";



?>
