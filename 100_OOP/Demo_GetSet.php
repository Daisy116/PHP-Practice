<?php

class CTest
{
	public $AProp = 10;

	private $_test;
	
	public function __set($varName, $varValue)   //__set當物件參考指向CTest不存在的屬性時
	{                                            //__set 執行時機：嘗試設定不存在的屬性或無權訪問的屬性。
		echo "__set<br>";
		echo $varName, ": ", $varValue, "<br>";
		$this->_test[$varName] = $varValue;
	}

	public function __get($varName)    //__get 執行時機：嘗試取得(讀取值)不存在的屬性。
	{
		echo "__get<br>";
		echo $varName, "<br>";
		return $this->_test[$varName];
	}

	
}

$obj = new CTest();
echo "AProp = $obj->AProp <br>";

echo "<hr>";

$obj->Name = "Chien";
echo "Name = $obj->Name <br>";

?>