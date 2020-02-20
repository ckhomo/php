<?php
header("content-type: text/html; charset=utf-8");
$chDelimiter = array(' ','，','。','；','：','？','！','!','?');
$sData = "";
$f = fopen("target.txt", "r");
while (!feof($f))
{
	$line = fgets($f);
	$sData .= Trim($line);
	// trim — Strip whitespace (or other characters)
	// from the beginning and end of a string
	//$sData = $sData . Trim($line);
}
fclose($f);
// print_r($sData);
$resultArr=multiexplode($chDelimiter,$sData);
// print_r($resultArr);
$count=count($resultArr);
$ans='';
for($i=0;$i<$count;$i++){
	$ans.=$resultArr[$i];
}
print_r($ans."<br>");
print_r("總長度為:".strlen($ans)/3);


function multiexplode ($delimiters,$string) {
   
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

// $text = "here is a sample: this text, and this will be exploded. this also | this one too :)";
// $exploded = multiexplode(array(",",".","|",":"),$text);

// print_r($exploded);
?>
