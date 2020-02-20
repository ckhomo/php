<?php
$f = fopen("pick3.txt", "r");// open file.
while (!feof($f)) // feof(file directory): for end-of-file.
	//if reach bottom: return true.
{
	$line = fgets($f);// retrieve data from current pointer.
	echo "$line<br>";
}
fclose($f);// close file.
echo "--End--";
?>