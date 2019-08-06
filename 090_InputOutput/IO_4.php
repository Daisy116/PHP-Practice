<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );   //讀取data.txt成file陣列!!
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";   //htmlspecialchars不會執行特殊符號(例如<hr>等等)
}

?> 