<?php
// 資料庫連線
require __DIR__ . '/parts/__.connect_db.php';

// 新增的時候不用給sid
// VALUE: 從外面來的用問號，NOW()是SQLfunction，用當下時間
$sql = "INSERT INTO `contact_list`(
    `name`, `email`, `mobile`,
    `birthdate`, `address`, `created_at`
    ) VALUES (?,?,?,?,?,NOW())";

// PREPARE準備
// 會拿到一個PDOstatement物件
$stmt = $pdo->prepare($sql);
// 執行
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthdate'],
    $_POST['address'],
]);


// 算有幾個Row
echo $stmt->rowCount();
echo 'ok';
