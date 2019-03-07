<?php
$fruit = array("apple","orange","grape");

function all(){
	global $fruit;
	$out = "I love ". $fruit[0] .", ". $fruit[1] .", ". $fruit[2] .", ";
	echo $out;
}
function arrayCount(){
	global $fruit;
	echo count($fruit);
}
function arrayLoop(){
	global $fruit;
	$alen = count($fruit);
	for($x = 0; $x < $alen; $x++) {
		echo $fruit[$x];
		echo " & ";
	}
}
function associative(){
	$car = array("arsy"=>"ferrari","fauzan"=>"lambo");
	foreach($car as $x => $x_value) {
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
}
}
all();
echo "<br>";
arrayCount();
echo "<br>";
arrayLoop();
echo "<br>";
associative();
?>