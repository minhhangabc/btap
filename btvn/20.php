<?php
function addElementToFront($array, $element) {
    array_unshift($array, $element);
    return $array;
}

function addElementToBack($array, $element) {
    array_push($array, $element);
    return $array;
}
$originalArray = array(2, 3, 4);
$elementToAdd = 1;
$arrayAfterAddingToFront = addElementToFront($originalArray, $elementToAdd);
echo "Mảng sau khi thêm phần tử $elementToAdd vào đầu:\n";
print_r($arrayAfterAddingToFront);
$arrayAfterAddingToBack = addElementToBack($originalArray, $elementToAdd);
echo "Mảng sau khi thêm phần tử $elementToAdd vào cuối:\n";
print_r($arrayAfterAddingToBack);
?>
