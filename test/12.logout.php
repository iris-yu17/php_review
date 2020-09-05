<?php

//啟動
session_start();

// 刪除$_SESSION的'user'
// $_SESSION是個array
unset($_SESSION['user']);

# session_destroy(); // 清掉所有 session 資料

// 轉向
header('Location: 11.login.php');
