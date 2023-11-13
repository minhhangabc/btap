<?php
function isPerfectNumber($number) {
    if ($number <= 1) {
        return false;
    }

    $sum = 1;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $sum += $i;
            if ($i != $number / $i) {
                $sum += $number / $i;
            }
        }
    }
    return $sum == $number;
}

$numberToCheck = 28;
if (isPerfectNumber($numberToCheck)) {
    echo "$numberToCheck là số hoàn hảo.";
} else {
    echo "$numberToCheck không là số hoàn hảo.";
}
?>
