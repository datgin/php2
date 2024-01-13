<?php
$mang = [1, 6, 4, 8, 2, 12, 3];
function tinhTong($mang)
{
    $tong = 0;
    for ($i = 0; $i < count($mang); $i++) {
        $tong += $mang[$i];
    }
    return "Tổng của mảng là: " . $tong . "<br>" . "Trung bình tổng của mảng là: " . round($tong / count($mang), 2) . "<br>";
}
echo "<pre>";
print_r($mang) ;
echo tinhTong($mang);
