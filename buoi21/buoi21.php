<?php 
$a = 1;
echo $a;
$a = 2;
echo "<br>";
echo $a;
define("PI", 3.14);
echo"<br>";
echo PI;

//Phân biệt dấu nháy đơn và đôi
$time = "6:30pm";
//Nháy đôi là thay giá trị của biến
$str1 ="Hôm nay tôi đi học lúc $time";
echo "<br>";
echo $str1;

$str2 ='Hôm nay tôi đi học lúc $time';
echo "<br>";
echo $str2;

//array
$arr1 = [4, 5, 9, 1];
//var_dump dùng cho các kiểu dữ liệu array, object, resource
//các kiểu dữ liệu còn lại là dùng echo
var_dump($arr1);
$sum = 0;
for($i = 0; $i <= count($arr1) - 1; $i++){
    $sum += $arr1[$i];
}
echo "<br>";
echo $sum;

//tính tổng số lẻ
$sum = 0;
for($i=0; $i <= count($arr1) -1; $i++){
    if($arr1[$i] % 2 == 1)  $sum += $arr1[$i];}
echo "<br>";
echo $sum;
?>
