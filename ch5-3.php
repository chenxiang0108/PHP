<?php
$price = 20;
$extra = true;

if ($extra == true) {
    echo "加珍珠再加5元<br>";
    $price += 5;
}

$temp = 12;
if ($temp > 20) 
    echo "穿短袖<br>";
else echo "穿長袖<br>";

$season = '123';
switch($season) {
    case '春':
        echo '穿長袖';
        break;
    case '夏';
        echo '穿短袖';
        break;
    case '秋':
        echo '穿長袖';
        break;
    case '冬':
        echo '穿長袖加外套';
        break;
    default:               // 找不到符合者執行下列程式
        echo '看氣象';
}

?>