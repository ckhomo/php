<?php
function ShowStar($iCount, $sWhat = "*")
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat;
	}
	echo $result;
}

$iHowMany = 87;
ShowStar($iHowMany,'😎');
?>