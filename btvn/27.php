<?php
function findLargestNegative($array) {
    $negativeNumbers = array_filter($array, function ($value) {
        return $value < 0;
    });
    if (empty($negativeNumbers)) {
        return "Không có số âm trong mảng.";
    }
    $largestNegative = max($negativeNumbers);

    return $largestNegative;
}
$originalArray = array(-2, 5, -80, -3, 7, 1);
$largestNegativeNumber = findLargestNegative($originalArray);
echo "Số âm lớn nhất trong mảng là: $largestNegativeNumber";
?>
