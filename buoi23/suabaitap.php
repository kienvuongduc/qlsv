<?php 
// Bài tập 5
function isPassed($diem) {
    $toan = $diem["toan"];
    $ly = $diem["ly"];
    $hoa = $diem["hoa"];
    // $toan = $d["toan"];//đúng ? => sai
    $tongDiem = ($toan + $ly) * 2 + $hoa;
    if ($tongDiem > 24) {
        return true;
    }
    return false;

    // return $tongDiem > 24 ? true: false;
}

$d = ["toan" => 6, "ly" => 5, "hoa" => 4];
echo isPassed($d);


// Bài tập 6
function passedList($danh_sach_diem_sv) {
    $dsd = [];
    foreach ($danh_sach_diem_sv as $ten => $diem) {
        if (isPassed($diem)) {
            $dsd[] = $ten;
            // array_push($dsd, $ten);
        }
    }
    return $dsd;
}

$danhSachDiemSV = [
    "nga" => ["toan" => 7, "ly" => 4, "hoa" => 8.5],
    "Nam" => ["toan" => 4, "ly" => 9, "hoa" => 3.5],
    "Nhan" => ["toan" => 1, "ly" => 5, "hoa" => 9.5]
];

$danhSachDau = passedList($danhSachDiemSV);
var_dump($danhSachDau);
?>