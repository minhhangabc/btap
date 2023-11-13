<?php
function isPerfectSquare($number) {
    return (sqrt($number) - floor(sqrt($number))) == 0;
}

function findPerfectSquaresInRange($start, $end) {
    $perfectSquares = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}
$startRange = 1;
$endRange = 100;
$perfectSquaresInRange = findPerfectSquaresInRange($startRange, $endRange);
echo "Các số chính phương trong khoảng từ $startRange đến $endRange là:\n";
print_r($perfectSquaresInRange);
?>
