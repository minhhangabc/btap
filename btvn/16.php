<?php
function countElements($array) {
    $count = count($array);
    return $count;
}
$originalArray = array(1, 2, 3, 4, 5);
$elementCount = countElements($originalArray);
echo "Số lượng phần tử trong mảng là: $elementCount";
?>
