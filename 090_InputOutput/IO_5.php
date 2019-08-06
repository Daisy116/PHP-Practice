<?php
	$contents = file_get_contents('data.txt');   //讀取data.txt成file_get_contents字串!!
	echo (str_replace("\r\n", "<br />", $contents));
?>