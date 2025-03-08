<?php
function square_digits($num): int {
    $resultString = "";
    for($i = 0; $i < strlen($num); $i++) {
        $g = ((string)$num)[$i];
        $p = (int)$g ** 2;
        $resultString .= $p;
    }
    return (int)$resultString;
}
echo square_digits(120);