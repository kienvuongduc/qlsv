<?php 
// Lấy các phần tử có chỉ số chẵn và giá trị chẵn
$a = [5, 4, 8, 2, 7];
$b = array_filter($a, "f1", ARRAY_FILTER_USE_BOTH);
//Default là truyền vào giá trị
function f1($key, $value) {
	$result = ($key % 2 == 0) && ($value % 2 == 0);
	return $result;
}
var_dump($b);
echo ARRAY_FILTER_USE_BOTH;
?>