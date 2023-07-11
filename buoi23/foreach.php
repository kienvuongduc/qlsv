<?php 
$sv = ["toan" => 7, "ly" => 5, "hoa" => 8];
$sum = 0;
foreach ($sv as $mon => $diem) {
    $sum += $diem;
}
echo $sum;
echo "<br>";


$sum = 0;
foreach ($sv as $diem) {
    $sum += $diem;
}
echo $sum;


// Dùng for
// Sắp xếp array theo dạng tổng giảm dần
$a37 = [
	[3, 5, 4, 2], //14
	[2, 1, 4, 0], //7
	[9,3] //12
];

usort($a37, function($arr1, $arr2) {
	if (array_sum($arr1) == array_sum($arr2)) {
		return 0;
	}

	return array_sum($arr1) > array_sum($arr2) ? -1: 1;
});

for ($i = 0; $i <= count($a37) - 1; $i++) {
    rsort($a37[$i]);
}
var_dump($a37);

// Sắp xếp array theo dạng giảm dần
// tiêu chí là phần tử đầu tiên
$a37 = [
	[3, 5, 4, 2], //3
	[2, 1, 4, 0], //2
	[9,3] //9
];

usort($a37, function($arr1, $arr2) {
	if ($arr1[0] == $arr2[0]) {
		return 0;
	}

	return $arr1[0] > $arr2[0] ? -1: 1;
});
var_dump($a37);
?>