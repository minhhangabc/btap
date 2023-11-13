<?php
$array = array(10, 20, 36, 48, 56);
function tinhTong($arr) {
    $tong = 0;
    foreach ($arr as $so) {
        $tong += $so;
    }
    return $tong;
}
$tong = tinhTong($array);
echo "Tổng của các số trong mảng là: $tong";
?>
