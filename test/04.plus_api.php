<?php
// 如果有設定: 轉成整數，沒有設定: 傳0
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;

// 用json格式
// 寫法一:用點連接字串
echo '{"answer":' . ($a + $b) . '}';


// 寫法二: %s空格，逗號後面依序帶入%s
//  printf('{"answer":%s}', $a + $b);
// printf('{"answer":%s%s}', $a, $b);
