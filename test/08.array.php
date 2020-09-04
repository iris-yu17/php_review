<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    // 索引式陣列
    $ar1 = array(2, 3, 4, 5);
    $ar2 = [2, 3, 4, 5];

    // 關聯式陣列，類似js的object
    // key must be a string
    $ar3 = [
        'name' => 'David',
        'age' => 23,
        'data' => [5, 6, 7],
        100,
    ];

    // r代表array
    print_r($ar2);
    print_r($ar3);

    // var_dump would provide more info
    var_dump($ar2);
    var_dump($ar3);


    ?>
</pre>
</body>

</html>