<?php
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}
$number1 = 12;
$number2 = 18;
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "Ước số chung lớn nhất (USCLN) của $number1 và $number2 là: $gcd\n";
echo "Bội số chung nhỏ nhất (BSCNN) của $number1 và $number2 là: $lcm\n";
?>
