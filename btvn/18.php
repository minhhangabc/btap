<?php
function countOccurrences($array, $element) {

    $occurrences = array_count_values($array);
    if (array_key_exists($element, $occurrences)) {
        return $occurrences[$element];
    } else {
        return 0;
    }
}
$originalArray = array(1, 2, 3, 2, 4, 2, 5);
$elementToCount = 2;
$occurrenceCount = countOccurrences($originalArray, $elementToCount);
echo "Số lần xuất hiện của phần tử $elementToCount trong mảng là: $occurrenceCount";
?>
