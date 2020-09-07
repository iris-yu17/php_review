<?php
$page_title = '資料列表';
$page_name = 'data-list';
require __DIR__ . '/parts/__.connect_db.php';


// 看有幾筆資料

$t_sql = "SELECT COUNT(*) FROM `contact_list`";
// $pdo連線到db，執行query撈資料，會回傳一個PDOstatement
// fetch拿第一筆，fetchAll拿所有
// FETCH_NUM會拿到索引 [0]第一個值
echo $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
die('~~~'); //或exit; // 結束程式


