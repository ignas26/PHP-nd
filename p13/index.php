<script>
var a ='https://api.chucknorris.io/jokes/random';
$.getJSON(a, function (data) {
$.each(data, function(key, val){
            $("#data").append(val.category + " ");
            $("#data").append(val.icon_url + " ");
            $("#data").append(val.id + " ");
            $("#data").append(val.url + " ");
            $("#data").append(val.value + " ");
  });
    });
</script>

<!-- neaisku kaip teisingai issitraukti ir pasikreipti i JSON duomenis -->

<?php

//$url = "https://api.chucknorris.io/jokes/random";
//$result = json_decode(file_get_contents($url, true));
////var_dump($result);
//
//foreach ($result as $savybe=>$sav){
//  echo '<pre>';
//  var_dump($savybe, $sav);
//  echo '<pre>';
//}


//



//class Chuckster {
//    
//    public $aaa = null;
//    public $bbb = null;
//    public $ccc = null;
//    public $ddd = null;
//    public $eee = null;
//
//public function __construct($category, $icon, $id, $url, $value){
//   $this->aaa = $category;
//   $this->bbb = $icon;
//   $this->ccc = $id;
//   $this->ddd = $url;
//   $this->eee = $value;
//    }
// 
//    
//public function save(){
//    $host = "localhost";
//    $user = "root";
//    $password = "";
//    $db = "duombaze";
//    $dsn = "mysql:host=$host;dbname=$db";
//    $pdo = new PDO($dsn, $user, $password);
//
//
//         $sql = "
//    INSERT INTO chuckster (category, icon_url, id_varchar, url, value) VALUES (:category, :icon_url, :id_varchar, :url, :value)";
//
//        
//            $sth = $pdo->prepare($sql);
//        
//            $sth->execute([
//                'category' => $this->category,
//                'icon_url' => $this->icon,
//                'id_varchar' => $this->id,
//                'url' => $this->url,
//                'value' => $this->value
//            ]);
//}
//}
//
//$chuckster = new Chuckster($result{'category'}, $result{'icon_url'}, $result{'id_varchar'}, $result{'url'}, $result{'value'});
//$chuckster->save();



?>


<script src="jquery-3.2.1.min.js"></script>