<?php

$obj = new CAnimal();    //物件參考$obj new出CAnimal類別的物件
$obj->makeNoise();       //$obj呼叫物件的function
echo "<hr>";

$obj->weight = 10;  // 如果是 $obj->weight = -10; 呢
echo $obj->weight;


class CAnimal
{
	
	public $weight;
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
}

?>
