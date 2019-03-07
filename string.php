<?php
$y = "arsybai gantheng";
function textCount() {
	global $y;
	$x = strlen($y);
	echo $x; //output 16
}
function wordCount() {
	global $y;
	$x = str_word_count($y);
	echo $x; //output 2
}
function reverse() {
	global $y;
	$x = strrev($y);
	echo $x; //output gnehtnag iabysra
}
function replace($text) {
	$x = str_replace("gantheng","jelek",$text);
	echo $x;
}
textCount();
print "<br>";
wordCount();
print "<br>";
reverse();
print "<br>";
replace($y);
?>