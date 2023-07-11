<?php 
$a = ["toan" => 5, "ly" => 2, "hoa" => 4];
array_walk($a, "f1");
// array_walk($a, "f1");
function f1(&$value, $key) {
	if ($key == "toan") {
		$value += 5;
	}
}
var_dump($a);
?>