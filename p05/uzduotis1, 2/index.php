<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
   
    <!-- Sukurti failo įkėlimo formą. Forma turi įkelti failus (failų tipai nesvarbūs) į direktoriją – uploads. Po failo įkėlimo į failą – files.txt įrašoma nauja eilutė – failo pavadinimas ir įkėlimo data ir laiku (formatas Y-m-d H:i:s). pvz.:   paveiksliukas.jpg  – 2018-02-11 18:38. Failas kiekvieną kartą papildomas naujais duomenimis. -->

    
    <form enctype="multipart/form-data" action="data.php" method="POST">
  <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <p>Upload: <br>
    <input type="file" name="yourfiles[]" />
    <br>
    <input type="file" name="yourfiles[]" />
    <br>
    <input type="file" name="yourfiles[]" />
   <br> <br>
    <input type="submit" value="Siųsti" />
</form>
    
    
    
    
    
    
    <?php

    
    

    

    
    
    ?>






</body>

</html>
