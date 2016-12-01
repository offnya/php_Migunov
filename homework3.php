<?php
error_reporting(E_ALL);
$array = array (
	$Africa = array ("Diceros bicornis", "Hexaprotodon liberiensis", "Phacochoerus africanus"),
	$SouthAmerica =  array ("Lontra felina","Procyon cancrivorus", "Octodon degus", "Vicugna"),
	$NorthAmerica = array ("Hystrix", "Mephitidae", "Sciurus arizonensis"),
	$Eurasia = array ("Elephas maximus", "Meles meles", "Panthera tigris"),
	$Australia = array ("Macropus", "Sarcophilus laniarius"),
	$Antarctica = array ("Spheniscidae")
);

$arrayTwo = array();
foreach ($array as $continents => $value) {
foreach ($value as $num => $animals) {
	if (strpos($animals, ' ') !== false) { 
    array_push($arrayTwo, $animals);
    }
}
}
print_r($arrayTwo);
echo "<br><br>";

foreach ($arrayTwo as $key => $animal) {
$animal = explode(" ", '$str');
shuffle($animal);
$animal = implode(" ", '$str');
}
print_r($arrayTwo); 
//но тут что-то пошло не так