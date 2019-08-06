<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");  //fopen開檔，"r"讀的模式
while (!feof($f))       //一次只讀檔案的一行，對伺服器的負擔比較小
{      //end of file
	$line = fgets($f);  //fgets讀一行
	$sData .= Trim($line) . "<br>";
}
fclose($f);    //fclose關檔
echo $sData;

?>
