<?php 
// Lấy các phần tử có giá trị chẵn
$a = [5, 4, 8, 2, 7];
$b = array_filter($a, "f1", );
//Default là truyền vào giá trị
function f1($value) {
	// $result = $value % 2 == 0;
	// return $result;
	return $value % 2 == 0;
}
var_dump($b);
?>