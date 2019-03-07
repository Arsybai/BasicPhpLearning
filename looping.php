<?php
function loop1(){
	$a = 3;
	while($a <= 9) {
		echo "here: $a <br>";
		$a++;
	}
}
function loop2(){
	$x = 1; 
	do {
		echo "here: $x <br>";
		$x++;
	} while ($x <= 5);
}
function loop3(){
	for ($x = 0; $x <= 10; $x++) {
		echo "here: $x <br>";
	}
}
print "loop1<br>";
loop1();
print "<br>loop2<br>";
loop2();
print "<br>loop3<br>";
loop3();
?>