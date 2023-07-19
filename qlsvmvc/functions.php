<?php 
    //$date là biến có giá trị là ngày chuẩn quốc tế. E.g: 2021-05-13
    //Hàm này đổi ngày theo định dạng việt nam. E.g: 13/5/2021
    function convertDateToVnFormat($date){
        $timestamp = strtotime($date);
        $vnFormatDate = date("d/m/Y", $timestamp);
        return $vnFormatDate;
    }

    function getGenderName($gender){
        $genderMap = [0 => "nam", 1 => "nữ", 2 => "khác"];
        $genderName = $genderMap[$gender];
        return $genderName;
    }
?>