<?php
  // include("testDefine.php");
  require("testDefine.php");

  echo test;

// require_once和include_once
//    使用方法跟require、include一樣，差別在於在引入檔案前，會先檢查檔案是否已經在其他地方被引入過了，
//    若有，就不會再重複引入。


// require和include的不同
//    require適合用來引入靜態的內容，而include則適合用來引入動態的程式碼。
//    include在執行時，如果include進來的檔案發生錯誤的話，會顯示警告，不會立刻停止；
//    而require 則是會顯示錯誤，立刻終止程式，不再往下執行。
//    include可以用在迴圈；require不行。
?>