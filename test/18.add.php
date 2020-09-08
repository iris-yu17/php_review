<?php
// 資料庫連線
require __DIR__ . '/parts/__.connect_db.php';

// 陣列裡面放要送的資料
$output = [
    // 是否有成功寫進去，預設沒有
    'success' => false,
    // 用來檢查: 前端送甚麼資料來，就送甚麼回去
    'postData' => $POST,
    'code' => 0,
    'error' => ''
];

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


// rowCount算有幾個Row(輸入幾筆資料)，若有新增成功會得到1
// echo $stmt->rowCount();
// echo 'ok';

// 把$output的資料送出去，用json格式
echo json_encode($output, JSON_UNESCAPED_UNICODE);
