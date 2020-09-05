<?php
// 用這支看session存的資料

session_start();

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
