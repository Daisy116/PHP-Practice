<?php
$sData = "908872526535442041985072568716";   //出過獎的號碼，左邊是早出的，右邊是晚出的號碼
$result = "01234567890";
$iLen = strlen($sData);    //求出$sData字串長度
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);     //把$sData從左邊切出0~9第一次出現的號碼
	$result = $ch . str_replace($ch, "", $result);   //

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);  //最後結果 : 61785-20943
?>



<!-- 做出流水號字串，固定四位數，不足四位前面補零 -->
<?php
$n = 4213;
$iLen = strlen($n);
$result = "";
if($iLen <= 4){
	$rLen = 4 - $iLen;
}
for ($iPos = 0; $iPos < $rLen; $iPos++)
{
	$result = "0" . $result;
}
$result = $result . $n;
echo $result;
?>