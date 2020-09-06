<?php
$page_title = '資料列表';

require __DIR__ . '/parts/__.connect_db.php';

$stmt = $pdo->query("SELECT * FROM `contact_list` LIMIT 5");

// 會拿到array，因__.connect.db有設定fetch關聯式陣列(FETCH_ASSOC)
$rows = $stmt->fetchAll()

?>

<?php include __DIR__ . '/parts/__html_head.php' ?>
<style>
    .my-trash-i {
        color: cornflowerblue;
        cursor: pointer;
    }
</style>

<?php include __DIR__ . '/parts/__navbar.php' ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><i class="fas fa-trash-alt"></i></th>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">birthday</th>
                <th scope="col">address</th>
                <th scope="col">created_at</th>
            </tr>
        </thead>
        <tbody>
            <!-- foreach(要查看的對象 as $key => $value) -->
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><i class="fas fa-trash-alt my-trash-i"></i></td>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthdate'] ?></td>
                    <td><?= $r['address'] ?></td>
                    <td><?= $r['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>
<?php include __DIR__ . '/parts/__scripts.php' ?>
<script>

    // 寫法一
    // 點擊，如果有包含'my-trash-i'就刪掉
    const table = document.querySelector('table');

    table.addEventListener('click', (event) => {
        const t = event.target;
        console.log(t.classList.contains('my-trash-i'));

        if (t.classList.contains('my-trash-i')) {
            t.closest('tr').remove();
        }
    })

    // 寫法二
    /*
    const table = document.querySelector('table');

    table.addEventListener('click', (event) => {
        const t = event.target;
        //console.log(t.classList);

        // ...轉換成陣列
        const ar = [...t.classList];

        // -1 表示找不到
        console.log(ar.indexOf('my-trash-i'));

        // 如果有找到
        if (ar.indexOf('my-trash-i') !== -1) {
            // closest('tr')往外找到最近的tr
            t.closest('tr').remove();
        }
    })
    */

</script>

<?php include __DIR__ . '/parts/__html_foot.php' ?>