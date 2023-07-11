<?php 
$a = ["toan" => 5, "ly" => 2, "hoa" => 4];
array_walk($a, "f1", 5);
function f1($value, $key, $userdata) {
	if ($key == "toan") {
		echo $value + $userdata;
	}
}
?>