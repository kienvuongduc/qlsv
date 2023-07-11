<?php 
// Tăng giá trị của các phần tử trong array lên 2 đơn vị
$a = [5, 4, 9, 2, 7];
$b = array_map("f1", $a);
function f1($element) {
	return $element + 2;
}
var_dump($b);

//Cách 2
$b = array_map(function($element){return $element + 2;}, $a);
var_dump($b);

$a = [5, 4, 9, 2, 7];
$b = [];
//for or foreach
//cuối cùng b là một array chứa các phần tử có giá trị là 7, 6, 11, 4, 9
foreach ($a as $e) {
	$b[] = $e + 2;
	// array_push($b, $e + 2);
}
var_dump($b);
?>