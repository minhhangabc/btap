<?php
function fibonacciInRange($start, $end) {
    $fibonacciNumbers = array();
    $a = 0;
    $b = 1;

    while ($a <= $end) {
        if ($a >= $start) {
            $fibonacciNumbers[] = $a;
        }

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return $fibonacciNumbers;
}

$start = 0;  
$end = 100;  

$fibonacciNumbers = fibonacciInRange($start, $end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là:\n";
echo implode(', ', $fibonacciNumbers);
?>
