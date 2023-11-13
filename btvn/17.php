<?php
function isPalindrome($str) {
    $cleanedStr = strtolower(str_replace(' ', '', $str));
    return $cleanedStr === strrev($cleanedStr);
}
$originalString = "A man a plan a canal Panama";
if (isPalindrome($originalString)) {
    echo "$originalString là chuỗi Palindrome.";
} else {
    echo "$originalString không là chuỗi Palindrome.";
}
?>
