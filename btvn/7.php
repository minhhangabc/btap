<?php
function tinhGiaiThua($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}
$so =3;
$giaiThua = tinhGiaiThua($so);
echo "Giai thừa của $so là: $giaiThua";
?>
