<?php
$a = 20;
function myfunction($b) {
	print "a=$a<br>";         //Undefined variable: a
	$a = 30;
	print "a=$a<br>";         //a=30
	global $a, $c;
	print "a=$a<br>";         //a=20
	return $c = ($b + $a);    //c = 60
}
print myfunction(40) + $c;    //120
?>