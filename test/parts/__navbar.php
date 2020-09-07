<?php
// 如果page_name沒設定，用空字串
if(!isset($page_name)) $page_name='';
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <!-- page_name=data_list的時候active，否則空字串 -->
                <li class="nav-item <?= $page_name == 'data_list' ? 'active' : '' ?>">
                <!-- link to data_list -->
                    <a class="nav-link" href="<?= WEB_ROOT ?>/test/17.data_list_pagination_2.php">資料列表 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $page_name == 'data_insert' ? 'active' : '' ?>">
                <!-- link to data_insert -->
                    <a class="nav-link" href="<?= WEB_ROOT ?>/test/18.data_insert.php">新增資料</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar .nav-item.active {
        background-color: #7abaff;
        border-radius: 10px;
    }
</style>