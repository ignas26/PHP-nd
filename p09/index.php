<?php

class Post
{
 private const TYPE = "MAX_LENGTH";
private $title = "biblija";
private $content = "religija";
private $author = "apastalai";
   
    
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
        self::TYPE;
    }
     //grazina atitinkamu klases lauku reiksme
       public static function getContent(){ 
        return self::TYPE;
       }
     //priskiria atitinkamu klases lauku reiksme
    public function setAuthor($author){
        $this->author = $author;
    }
     //grazina atitinkamu klases lauku reiksme
        public function getAuthor(){
         return $this->author;
    }


}

$post = new Post();

//$post->setTitle("My title");
//$post->setContent("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s");
//$post->setAuthor(Person $person);


echo $post->getTitle()."<br>";
echo $post->getContent()."<br>";
echo $post->getAuthor()."<br>";



//------------------------


class Person
{

private $id = "007";
private $name = "Bond";

   
    
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
