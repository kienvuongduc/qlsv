<?php 
// Lấy các phần tử có chỉ số chẵn
$a = [5, 4, 8, 2, 7];
$b = array_filter($a, "f1", ARRAY_FILTER_USE_KEY);
//Default là truyền vào giá trị
function f1($key) {
	// $result = $key % 2 == 0;
	// return $result;
	return $key % 2 == 0;
}
var_dump($b);
echo ARRAY_FILTER_USE_KEY;
?>