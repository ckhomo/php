<?php
$showStr = "Genius is|one/percent inspiration and ninety-nine percent perspiration.";
// strtok — Tokenize string.
//strtok($str, delimiter)
$s = strtok($showStr, " "); // $s == Genius
// $s = strtok(" .|/"); // $s == is
echo $s;
while ($s != "") {
    echo $s . "*" . "<br>";
    $s = strtok(" .|/");

    // 如果這麼寫，程式會沒完沒了...
    // $s = strtok($showStr, " ");
}

//簡短中譯:
//僅第一次呼叫時需指定字串來源。
//第2,3...次會從前次斷點執行strtok, 再次指定字串來源會重置斷點。
//可以指定複數delimiter於strok中。
// Note that only the first call to strtok uses the string argument.
// Every subsequent call to strtok only needs the token to use,
// as it keeps track of where it is in the current string.
// To start over, or to tokenize a new string you simply call strtok with the string argument again to initialize it.
//Note that you may put multiple tokens in the token parameter.
//The string will be tokenized when any one of the characters in the argument is found.
