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
function findPrimesInRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}
$start = 10;
$end = 100;
findPrimesInRange($start, $end);
?> 
