<?php
function sortArrayDescending($array) {
    arsort($array);
    return $array;
}

$originalArray = array(5, 2, 8, 1, 3);
$sortedArray = sortArrayDescending($originalArray);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần:\n";
print_r($sortedArray);
?>
