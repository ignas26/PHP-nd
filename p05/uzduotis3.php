<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    
/* Atfiltruokite masyvą,  atrinkite visas datas kurios yra ne senesnės nei 5 metai. T.y. jeigu nuo datos pradžios iki dabar praėjo daugiau nei 5 metai šių datų nerodom. Būtų gerai jei viską įdėtumėt į funkciją į kurią paduodant tokį masyvą kaip parametrą jį grąžintų atfiltruotą masyvą. */
    

    
        $dates = array (
        0 => '2016-04-17 13:32:08',
        1 => '1990-01-21 13:00:07',
        2 => '2001-06-06 06:02:12',
        3 => '1990-04-21 04:50:26',
        4 => '2014-04-05 07:53:55',
        5 => '2018-01-07 20:40:34',
        6 => '1986-09-21 02:26:38',
        7 => '2014-08-12 05:47:48',
        8 => '1971-09-03 00:26:37',
        9 => '1992-10-08 17:24:03',
        10 => '1983-12-02 07:56:36',
        11 => '1987-11-29 05:38:05',
        12 => '2012-03-18 16:19:56',
        13 => '1977-08-28 15:11:20',
        14 => '2003-03-09 00:03:33',
        15 => '2008-04-18 03:50:12',
        16 => '2000-06-04 14:28:08',
        17 => '2017-12-08 13:27:04',
        18 => '1975-10-10 23:13:53',
        19 => '1988-08-10 20:51:51',
        20 => '2009-05-25 03:41:38',
        21 => '1980-11-30 13:35:47',
        22 => '1988-01-09 17:57:18',
        23 => '1985-05-02 03:19:03',
        24 => '2003-12-02 07:33:10',
        25 => '2003-11-21 05:19:38',
        26 => '1979-01-14 19:16:07',
        27 => '1978-01-24 11:52:31',
        28 => '1985-02-07 04:42:43',
        29 => '1997-03-17 09:37:18',
    );
    
$current_date = new DateTime("now", new DateTimeZone('UTC'));
$current_date->setTimezone(new DateTimeZone('Europe/Vilnius'));
echo $current_date->format("Y-m-d H:i:s")."<br>";

    
    
    foreach($dates as $number){
        echo "<pre>";
        echo $number;
$another_date = new DateTime($number, new DateTimeZone('UTC'));
$difference = $another_date->diff($current_date);
echo "<br> Praejo ".$difference->format(" %a dienų");
// prie kiekvienos datos ankstesnes nei 2013, atsiranda zymejimas "1"
$diff= $number < 2013;
echo $diff;

echo "</pre>";


    }

//nepabaigta, isvesti skirtumai (dienomis) tarp kiekvienos masyvo elemento datos ir dabartines datos    
    

?>






</body>

</html>
