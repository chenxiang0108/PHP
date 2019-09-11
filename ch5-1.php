<?php
    header('contnt-type: text/html; charset=utf-8');
    $price = 1357;
    $PRICE = 2468;
    $價格 = 399;

    echo '$price=';
    echo $price,'<br>';

    echo '$PRICE =';
    echo $PRICE,'<br>';

    echo '$價格 =';
    echo $價格,'<br>';
    
    $student[1] = 91;
    $student[] = 85;
    $student[] = 73;
    $student['Mary'] = 100;
    $student['John'] = 99;
    echo "1號學生分數:$student[1]<br>";
    echo "3號學生分數:$student[3]<br>";
    echo "Mary的分數:{$student['Mary']}<br>";
    echo "John的分數:{$student['John']}";
?>
