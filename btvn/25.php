<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
$numberToCheck = 13;
if (isPrime($numberToCheck)) {
    echo "$numberToCheck là số nguyên tố.";
} else {
    echo "$numberToCheck không là số nguyên tố.";
}
?>
