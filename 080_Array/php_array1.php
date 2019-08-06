<?php
$bloodType[] = 'A';    //不必寫$bloodType[0]，這樣轉換位置比較方便
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

for ($i = 0; $i <= 3; $i++) {    //用迴圈把陣列全讀出來
	echo $bloodType[$i] . "<br />";
}
?>