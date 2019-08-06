<?php

$obj = new CAnimal(3);   //會呼叫__construct，因為物件參考指向實體
echo "weight: ", $obj->getWeight(), "<br>";
//$obj2 = $obj;
//echo "flag 1<br>";
$obj = null;    //會呼叫__destruct()，因為物件參考指向空
//echo "flag 2<br>";


class CAnimal
{
	// public $weight;
	private $_weight = 0;

	function __construct($weightValue = 0) {   //function __construct建立建構子
		echo "Object Created.<br>";
		$this->setWeight($weightValue);
		// 還是寫成這樣: (哪一個比較好? @@" )
		// $this->_weight = $weightValue;
	}
	
	function __destruct() {    //__destruct()解構程式
		echo "Object destroyed.";
	}
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value)
	{
		if ($value >= 0)
			$this->_weight = $value;
	}
	
	public function getWeight()
	{
		return $this->_weight;
	}
	
}

?>
