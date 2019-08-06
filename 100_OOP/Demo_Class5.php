<?php
$obj = new CAnimal ();
$obj->makeNoise ();
echo "分隔線<br>";

$obj->weight = 10;    //呼叫到__set和setWeight函式
echo "<br>";
$obj->weight = -5;
echo "分隔線2<br>";
echo $obj->weight;    //呼叫到__get和getWeight??
echo "分隔線3<br>";


class CAnimal {
	public $weight;
	private $_weight = 0;
	
	function __construct() {
		foreach ( get_class_vars ( "CAnimal" ) as $varName => $varValue ) {
			if (substr ( $varName, 0, 1 ) != "_")   //如果$varName的第一個字元不是_開頭的
				unset ( $this->$varName );         //unset把該屬性刪掉
		}
		
		$this->weight = 0;
	}
	
	public function __get($varName) {
		echo "__get";
		if (method_exists ( $this, $MethodName = 'get' . $varName ))
			return $this->$MethodName ();
		else
			trigger_error ( $varName . ' is not avaliable .', E_USER_ERROR );
		
	}
	
	public function __set($varName, $value) {
		echo "__set";
		if (method_exists ( $this, $MethodName = 'set' . $varName ))
			return $this->$MethodName ( $value );
		else
			trigger_error ( $varName . ' is not avaliable .', E_USER_ERROR );
		
	}
	
	public function makeNoise() {
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value) {
		if ($value >= 0)        //數值大於0，才會設值成功
			$this->_weight = $value;
	}
	
	public function getWeight() {
		return $this->_weight;
	}
}

?>
