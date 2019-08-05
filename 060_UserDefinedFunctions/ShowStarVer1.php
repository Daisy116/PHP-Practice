<?php
function ShowStar($count,$what = "*")   //$what預設值是*，所以參數可只給一個
{	$result = "";
	for($j = 0;$j<$count;$j++){
		// echo "*";
		$result .= $what;
	}
	echo $result;
}

ShowStar(50,"^");    //參數可以多給，不影響執行
?>