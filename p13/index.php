<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db="duombaze";
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $password);
    $sql = "
    INSERT INTO chuckster (category, icon_url, id_varchar, url, value) VALUES (:category, :icon_url, :id_varchar, :url, :value)";
    $sth = $pdo->prepare($sql);

for($i = 0; $i < 5; $i++){
    
        $url="https://api.chucknorris.io/jokes/random";
        $result=json_decode(file_get_contents($url));

    $sth = $pdo->prepare($sql);
            $sth->execute(["category" => $result->category,
                "icon_url" => $result->icon_url,
                "id_varchar" => $result->id,
                "url" => $result->url,
                "value" => $result->value]);
}
//pasiduodu, i duombaze isiraso tik kai meta klaida (parefreshinus daugiau kartu, kartais nemeta) ir isiraso tik po viena joke
    ?>
