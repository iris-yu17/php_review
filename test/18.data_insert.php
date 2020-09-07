<?php
$page_title = '新增資料';
$page_name = "data_insert";
require __DIR__ . '/parts/__.connect_db.php';
?>

<?php include __DIR__ . '/parts/__html_head.php' ?>
<?php include __DIR__ . '/parts/__navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>

                    <!-- checkform檢查資料格式，若return flase就送不出去 -->
                    <form name="form1" onsubmit="checkForm();">
                        <div class="form-group">
                            <!-- label的for是對應input的id -->
                            <!-- 沒有name就不會送出 -->
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="mobile">mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>

                        <div class="form-group">
                            <label for="birthdate">birthdate</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>

                        <div class="form-group">
                            <label for="address">address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>





</div>
<?php include __DIR__ . '/parts/__scripts.php' ?>
<script>
    // checkform檢查資料格式
    function checkForm() {

        // Form: 表單，有外觀
        // FormData: 沒有外觀的表單
        // 找form1，把裡面的值塞到FormData
        const fd = new FormData(document.form1);

        // 發給18.data_insert_api.php
        fetch('18.data_insert_api.php', {
                method: 'POST',
                // body是要送的資料
                body: fd
            })
            // 傳字串用text
            .then(r => r.text())
            // 
            .then(str => {
                console.log(str);
            });

        return false;
    }
</script>

<?php include __DIR__ . '/parts/__html_foot.php' ?>