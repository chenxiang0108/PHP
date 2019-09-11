<?php
if (empty($_POST)) {   // 判斷 post 是否有傳送資料過來
    echo '沒收到資料';
 }else {
     echo $_POST['username'].'你好';
 }
?>