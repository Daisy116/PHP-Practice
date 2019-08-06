<?php
	// 看demo_natsort.php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);     //一個字一個字比(字串比對)
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);   //看成數字比，所以18>2
	var_dump($testArray);
?>
