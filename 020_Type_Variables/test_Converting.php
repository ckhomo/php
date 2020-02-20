<?php

$a = 12;
$b = "34";
// "": 裡面可放變數, 數值..
// '': 裡面永遠被辨認為字串

// $result = $a + $b; // 46
// $result = $a . $b; // 1234
$result = $a + intval($b);  // 46

echo $result;

?>