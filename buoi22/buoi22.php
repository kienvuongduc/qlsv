<?php 
$str1 = "Nguyễn";
$str2 = "Hữu";

$str = $str1 . " " . $str2;
echo $str;
//nối chuỗi cách 2
$str = "$str1 $str2";
echo "<br>";
echo $str;

//cộng dồn
$sum = 5;
//$sum = $sum + 2;
$sum += 2;
echo"<br>";
echo $sum;

$str1 = "Hello";
$str1 .= " World";
echo"<br>";
echo $str1;

//mảng thường (numric array)
$arr1 = [4, 7, 1, 9];
var_dump($arr1);

//mảng kết hợp(associative array)
//trong array kết hợp, chỉ số đc gọi là key. toan ly hoa là key
$arr3 = ["toan" => 4, "ly" => 3, "hoa" => 7];
$sum = 0;
foreach($arr3 as  $diem){
    $sum += $diem;
}
echo"<br>";
echo $sum;
echo "<br>";
echo $arr3["ly"];

//mảng nhiều chiều 
$arr = [4, 5, 9, 2];
$arr = [[5, 10, 7], ["hello", true]];
echo"<br>";
var_dump($arr);
echo $arr[0][2];
$arr= ["x" => [5, 10, 6], "y" => ["hello", true]];
var_dump($arr);
echo $arr["x"][2];

//tính tổng giá trị các phần tử trừ số lẻ
$arr=[5, 9, 4, 2, 7];
$sum = 0;
for($i=0; $i <= count($arr) - 1; $i++){
    if($arr[$i] % 2 == 1) 
        continue;
    $sum += $arr[$i];
}
echo"<br>";
echo $sum;

function tong($a, $b){
    $c = $a + $b;
    return $c;
}
echo"<br>";
echo tong(3, 4);



?>