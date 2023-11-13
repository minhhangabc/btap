<?php
function findLargestOdd($array) {
    $oddNumbers = array_filter($array, function ($value) {
        return $value % 2 != 0;
    });
    if (empty($oddNumbers)) {
        return "Không có số lẻ trong mảng.";
    }
    $largestOdd = max($oddNumbers);

    return $largestOdd;
}
$originalArray = array(2, 5, 8, 3, 7, 1);
$largestOddNumber = findLargestOdd($originalArray);
echo "Số lẻ lớn nhất trong mảng là: $largestOddNumber";
?>
