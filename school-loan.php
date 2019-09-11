<!DOCTYPE html>
<html>
<head>
    <meta charset ='utf-8'>
    <title>就學貸款試算</title>
    <style>
        form {width:240px;
             background-color:gold;
             padding:10px;}
        input {width:3em;}
    </style>
</head>
<body>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'>
        貸款金額:<input name='loan' type='number' value='5' required>萬元<br>
        年利率:<input name='rate' type='decccimal' value='1.8' required>%<br>
        還款年數:<input name='year' type='number' value='1' required>年<br>
        <input type='submit' value='確定'>
    </form>
    <p>
        <?php
            if ((isset($_POST['loan']) && $_POST['loan']>0) &&
                        (isset($_POST['rate']) && $_POST['rate']>0) &&
                        (isset($_POST['year']) && $_POST['year']>0)) {
                $month = $_POST['year'] *12;
                $rate = $_POST['rate']/100/12;
            $power_term = 1;
            for($i=1;$i<=$month;$i++)
            $power_term = $power_term * (1 + $rate);
            $payment = $_POST['loan'] * 10000 * ($power_term*$rate)/($power_term-1);
            echo "每個月應還<b>".ceil($payment)."元</b>";
            }
        ?>
    </p>
</body>
</html>