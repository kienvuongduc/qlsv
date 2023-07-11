<?php 
// Tăng giá trị của các phần tử trong array lên 2 đơn vị
$a = [5, 4, 9, 2, 7];
$b = array_map("f1", $a);
function f1($element) {
	return $element + 2;
}
var_dump($b);
?>