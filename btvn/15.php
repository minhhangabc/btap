<?php
function reverseString($str) {
    $reversedString = strrev($str);
    return $reversedString;
}
$originalString = "Hello!";
$reversedString = reverseString($originalString);
echo "Chuỗi sau khi đảo ngược: $reversedString";
?>
