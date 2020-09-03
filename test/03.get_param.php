<?php

// Get；解析用戶端傳來的query string
// 沒給a值，會顯示Notice
// (若在網址後面打?a=5 -->得到5)
$a = $_GET['a'];

// 用isset，，看a有沒有被設定，若a有值就顯示，沒有則顯示0
// $a = isset($_GET['a']) ? $_GET['a'] : 0;
echo $a;

// php7寫法
//$a = $_GET['a'] ?? 0; 
