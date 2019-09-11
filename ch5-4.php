<?php
header ('content-type =text/html; chartset =utf-8');
$sum = 0;
$i = 1;
while($i <= 10) {
    $sum += $i;
    $i++;
}
echo "用while迴圈算1~10的和".$sum."<br>";

$sum = 0;
for ($i = 1;$i<=10;$i++) {
    $sum += $i;
}
echo "用for迴圈算1~10的和".$sum."<br>";

echo "春、夏、秋、冬的英文:<br>";
$season_en = array("spring","summer","autumn","winter");
foreach($season_en as $value){
    echo "$value<br>";
}

$seasons = ["春"=>"spring",
            "夏"=>"summer",
            "秋"=>"autumn",
            "冬"=>"winter"];
foreach($seasons as $name=>$values) 
echo "$name 的英文名是 $values<br>";
?>