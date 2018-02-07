<html>
<head></head>
<body class="page_bg">
<?php

// Parašykite funkciją kurį atspausdintų jūsų vardą HTML dokumente kaip antraštę (angl. heading).



$vardas = "<h1>IGNAS</h1>";
echo "$vardas";

$vardas = "<h2>IGNAS</h2>";
echo "$vardas";

$vardas = "<h3>IGNAS</h3>";
echo "$vardas";

$vardas = "<h4>IGNAS</h4>";
echo "$vardas";

$vardas = "<h5>IGNAS</h5>";
echo "$vardas";

$vardas =  "<h6>IGNAS</h6>";
echo "$vardas";




$name = 'Ignas';
echo htmlentities ($name);

function vardas(){
$vrd = new DOMDocument();
$vrd->loadHTML("<html><body><br><br><h1>IGNAS Z.</h1><br></body></html>");
echo $vrd->saveHTML();
}

vardas();

?>




</body>
</html> 














