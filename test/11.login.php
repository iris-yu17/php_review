<?php
// 啟動session
  session_start();

  // 哪些accounts可以登入
  $accounts = [
    'shin' => [
        'pw' => '123456',
        'nickname' => '小新'
    ],
    'der' => [
        'pw' => '1qaz2wsx',
        'nickname' => '小明'
    ],
];

// 有沒有送出表單的 account 欄位資料
// $_POST['account']是用戶輸入的帳號
if(isset($_POST['account'])){
    // 把用戶輸入的帳號丟進$accounts，若有對應的array，就不會是空的，代表帳號正確
    // 用empty讓它不會顯示notice
    if(!empty($accounts[$_POST['account']])){
        $a =$accounts[$_POST['account']];
        // 比對密碼
        if($_POST['password']==$a['pw']);{
            // 登入後設定session
            // array裡是要存的東西
            // 'user' 是自訂的
            $_SESSION['user']=[
                // 存account and nickname
                // 用逗號
                'account'=> $_POST['account'],
                'nickname'=> $a['nickname'],
            ];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <!-- 如果session有設定(有登入成功)  -->
        <?php if(isset( $_SESSION['user'])): ?>

        <!-- 就秀下面這段 -->
        <div class="row">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    <?php $_SESSION['user']['nickname'] ?> 你好<br> 
                    <a href="./12.logout.php">登出</a>   

                </div>
            </div>
        </div>

        <!-- 沒有登入成功 -->
        <?php else: ?>

        <div class="row">
            <div class="col-lg-6">
                <!-- 若用post改成  -->
                <form method="post">
                <!-- <form> -->
                    <div class="form-group">
                        <!-- label的for是對應input的id -->
                        <!-- 沒有name就不會送出 -->
                        <label for="account">Account</label>
                        <input type="text" class="form-control" id="account" name="account">
                        <small id="accountHelp" class="form-text text-muted">We'll never share your account with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- endif -->
    <?php endif ?>

    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>