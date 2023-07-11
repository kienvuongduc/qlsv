<?php 
// Tính tổng các số chẵn
$a = [5, 4, 8, 2, 7];
// tham số thứ nhất là giá trị tích lũy, tham số thứ 2 là giá trị của từng phần tử, tham số thứ 3 là giá trị khởi tạo của tham số thứ nhất
$b = array_reduce($a, "f1", 0);
//Default là truyền vào giá trị
function f1($sum, $value) {
	if ($value % 2 == 0) {
		$sum += $value;
	}
	return $sum;
}
echo $b;
?>