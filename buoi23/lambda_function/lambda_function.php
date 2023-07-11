<?php 
//Lambda function còn được gọi là closure hay anonymus function 
$f1 = function ($a, $b) {
	$c = $a + $b;
	return $c;
};

echo $f1(3, 4);

// function tong($a, $b) {
// 	$c = $a + $b;
// 	return $c;
// }

// echo tong(3,4);
?>