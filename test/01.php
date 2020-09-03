<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // 定義常數
    // php常數是全域，變數不是
    define('MY_CONST', 123);
    echo MY_CONST;
    echo '</br>';

    // 變數用$開頭
    //empty()函數用來判斷"值"是不是空的(eg.0,"",[])，如果是空值就回傳(true)，如果有"值"就不回傳(false)
    $a = 456;
    echo $a . '</br>';
    echo $b . '</br>';
    echo empty($b) ? 'empty' : 'not empty' . '</br>';
    echo !empty($b) . '</br>';
    echo empty($b) . '</br>';

    // ""會判斷變數  ''不會
    // 用\跳脫字元
    echo '$a<br>';
    echo "$a<br>";
    echo "\$a<br>";
    echo "\n\"<br>";


    ?>


</body>

</html>