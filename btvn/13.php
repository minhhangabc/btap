<?php
function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    return $uniqueArray;
}
$originalArray = array(1, 2, 2, 3, 4, 4, 5);
$uniqueArray = removeDuplicates($originalArray);
echo "Mảng sau khi loại bỏ phần tử trùng lặp:\n";
print_r($uniqueArray);
?>
