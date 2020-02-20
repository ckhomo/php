<?php
  $d = strtotime("1970-01-01 08:00:00"); //Taipei Unix時間戳(timestamp)
  // $d = strtotime("1970-01-01");
  // -28800 GMT+8
  // $d = strtotime("2012-09-10 -3 days");
  // $d = strtotime("2012-09-10 +1 month");
  echo $d;
  echo "<br>";
  echo gmdate("Y-m-d H:i:s", $d); //GMT+0
  echo date("Y-m-d H:i:s", $d); //根據伺服器位置顯示當地時區
?>
