<?php

$a = array('1', '2');
foreach ($a as $k => $x)
{
	$x = '3';   //這樣改陣列名稱沒用
	$a[0] = '3';   //要這樣改才有效
}

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>