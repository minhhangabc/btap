<?php
function insertElementAtIndex($array, $element, $index) {
    if ($index < 0 || $index > count($array)) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }
    array_splice($array, $index, 0, $element);

    return $array;
}
$originalArray = array(1, 2, 3, 4, 5);
$elementToInsert = 99;
$positionToInsert = 2;
$resultArray = insertElementAtIndex($originalArray, $elementToInsert, $positionToInsert);
echo "Mảng sau khi chèn phần tử $elementToInsert vào vị trí $positionToInsert:\n";
print_r($resultArray);
?>
