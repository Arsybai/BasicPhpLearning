<?php
function nowtime(){
	date_default_timezone_set("asia/jakarta");
	echo "The time is " . date("h:i:sa") ."<br>";
}
nowtime();
function str_to_time(){
	$d=strtotime("10:30pm April 15 2014");
	echo "date is " . date("Y-m-d h:i:sa", $d) ."<br>";
}
str_to_time();
function strtotime_day(){
	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	$e=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $e) . "<br>";
	$f=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $f) . "<br>";
}
strtotime_day();
?>