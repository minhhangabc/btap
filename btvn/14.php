<?php
function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    return $position;
}
$originalArray = array(1, 2, 3, 4, 5);
$elementToFind = 3;
$position = findElementPosition($originalArray, $elementToFind);
if ($position !== false) {
    echo "Vị trí của phần tử $elementToFind trong mảng là: $position";
} else {
    echo "Phần tử $elementToFind không tồn tại trong mảng.";
}
?>
