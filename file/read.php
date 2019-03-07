<?php
function open(){
	$myfile = fopen("teks.txt", "r");
}
function read(){
	echo readfile("teks.txt");
}
function close(){
	fclose($myfile);
}
?>