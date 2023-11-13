<?php
function findLargestPositive($array) {
    $positiveNumbers = array_filter($array, function ($value) {
        return $value > 0;
    });
    if (empty($positiveNumbers)) {
        return "Không có số dương trong mảng.";
    }
    $largestPositive = max($positiveNumbers);

    return $largestPositive;
}
$originalArray = array(-2, 5, 8, -3, 7, 1);
$largestPositiveNumber = findLargestPositive($originalArray);
echo "Số dương lớn nhất trong mảng là: $largestPositiveNumber";
?>
