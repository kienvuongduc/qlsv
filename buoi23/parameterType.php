<?php 
function f1($a) {
    $a += 5;
    return $a;
}
$x = 7;
echo f1($x);
echo "<br>";
echo $x;
echo "<br>";

function f2(&$b) {
    $b += 5;
    return $b;
}
$y = 7;
echo f2($y);
echo "<br>";
echo $y;

$a8 = array(7, 4, 6, 2, 5); //7 4 a b c 5
$x = array_splice($a8, 2, 2, array("a", "b", "c"));
var_dump($a8);
?>