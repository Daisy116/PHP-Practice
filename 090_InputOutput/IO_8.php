<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);  //explode是將$sData字串依換行符號(\n)拆成陣列($dataArray)
$f = fopen("data2.txt", "w");  //"w"寫的模式
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);  //fputs寫入檔案
}
fclose($f);
echo "-- Done --"

?>
