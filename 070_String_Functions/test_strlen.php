<?php
  header("content-type: text/html; charset=utf-8");
  $s = '許功蓋';
  echo $s."<br>";
  //echo strlen($s);
  echo substr($s, 3, 3);
  //utf-8 1字長度3
  //big5  1字長度2
?>