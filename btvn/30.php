<?php
function isSubstring($mainString, $subString) {
    return strpos($mainString, $subString) !== false;
}
$mainString = "Hello World";
$subString = "World";
if (isSubstring($mainString, $subString)) {
    echo "\"$subString\" là chuỗi con của \"$mainString\".";
} else {
    echo "\"$subString\" không là chuỗi con của \"$mainString\".";
}
?>
