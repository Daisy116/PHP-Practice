<!-- 將上傳的檔案放到這個檔案的同資料夾中 -->
<!-- 參考 : http://www.webtech.tw/info.php?tid=24 -->
<?php
if (isset ( $_POST ["btnOK"] )) {  //是否有btnOK(按送出鈕了嗎?)
	processFile ( $_FILES ["file1"] );  //執行processFile函式
}
function processFile($objFile) {      //$objFile是一個陣列
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		1. Select a file：<input type="file" name="file1" /><br /> 
		<input type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>