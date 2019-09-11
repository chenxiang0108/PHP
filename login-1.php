<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>歡迎網頁</title>
        <style type='text/css'>
            body {text-align:center}
            div.welcome{color:green}
            div.error{color:red}
        </style>
    </head>
    <body>
        <?php
        $userpass =array('admin'=>'12345',
                         'tony'=>'54321'
                        );
        if(! $_POST['uname'] || ! $_POST['upass'] ){
            echo "<div class='error'>請輸入帳號密碼!</div>";
        }
        else{
            $username =$_POST['uname'];
            $password =$_POST['upass'];
        if ($userpass[$username] == $password){
            echo "<div class ='welcome'>$username 會員你好,";
            echo "你有新留言</div>";
        }
        else {
            echo "<div class='error'>帳號密碼不相符</div>";
        }
        }
        ?>
    </body>
</html>