<?php
$sData = "908872526535442041985072568716";
// remove duplicated numbers:(from back to front)
//6178520943
$result = "01234567890";//set to null will not change result!
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++) {
    $ch = substr($sData, $iPos, 1);// length=1, cut from $iPos.
    $result = $ch . str_replace($ch, "", $result);// in $result: replace all $ch to "".
	// 1st loop: 9+ 0123456780
	// 2nd loop: 0+ 912345678
	// 3rd loop: 8+ 091234567
	// 4th loop: 8+ 091234567
	// 5th loop: 7+ 809123456
	// 6th loop: 2+ 780913456
	// 7th loop: 5+ 278091346
	// 8th loop: 2+ 578091346
	// when duplicated digit appear: it goes to front!
}
echo $result; //6178520943
// echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
// 0,5: 
// Result: 61785-20943
