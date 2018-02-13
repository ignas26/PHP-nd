<?php
    
/* Nuskaityti įkeltų failų informacijos failą-  files.txt. Parodyti įkeltų failų sąrašą. */


$current_date = new DateTime("now", new DateTimeZone('UTC'));
$current_date->setTimezone(new DateTimeZone('Europe/Vilnius'));


$uploaddir = __DIR__."\\uploads\\";
    $files = [];
    $files = normalize_files_array($_FILES);
    foreach($files['yourfiles'] as $file){
        $uploadfile = $uploaddir . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    }
    function normalize_files_array($files = []) {
        $normalized_array = [];
        foreach($files as $index => $file) {
            if (!is_array($file['name'])) {
                $normalized_array[$index][] = $file;
                continue;
            }
            foreach($file['name'] as $idx => $name) {
                $normalized_array[$index][$idx] = [
                    'name' => $name,
                    'type' => $file['type'][$idx],
                    'tmp_name' => $file['tmp_name'][$idx],
                    'error' => $file['error'][$idx],
                    'size' => $file['size'][$idx]
                ];
            }
        }
        return $normalized_array;
    }

$file = 'fileinfo.txt';
$data= [];
$data = $uploadfile. $current_date->format("Y-m-d H:i:s");
if(!file_exists($file)){
    //sukuriam faila ir irasom duomenys i ji
    file_put_contents($file, $data);
} else {
    //papildom faila jei toks failas jau yra
    file_put_contents($file, $data, FILE_APPEND);
}


$file_data = file($file);
foreach($file_data as $line){
var_dump ($line);
}


?>
