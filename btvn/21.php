<?php
function findSecondLargest($array) {
    rsort($array);
    $uniqueArray = array_unique($array);
    if (count($uniqueArray) < 2) {
        return "Không có số lớn thứ hai.";
    }
    $secondLargest = $uniqueArray[1];

    return $secondLargest;
}
$originalArray = array(5, 2, 8, 1, 3);
$secondLargestNumber = findSecondLargest($originalArray);
echo "Số lớn thứ hai trong mảng là: $secondLargestNumber";
?>
