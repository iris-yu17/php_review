<?php
$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

// 用json格式
// 寫法一:用點連接字串
echo '{"answer":' . ($a + $b) . '}';


// 寫法二: %s空格，逗號後面依序帶入%s
//  printf('{"answer":%s}', $a + $b);
// printf('{"answer":%s%s}', $a, $b);
