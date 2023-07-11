<?php 
// Tăng giá trị của các phần tử trong array lên 2 đơn vị
$a = [5, 4, 9, 2, 7];
$delta = 2;
$b = array_map(function($element) use ($delta) {
	return $element + $delta;
}, $a);

var_dump($b);


?>