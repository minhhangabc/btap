<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen($number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    return $sum == $number;
}

$number = 153; 

if (isArmstrong($number)) {
    echo "$number là số Armstrong.";
} else {
    echo "$number không là số Armstrong.";
}
?>
