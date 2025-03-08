<?php
function expanded_form(int $n): string {
    // Your code here
    $resultString = [];
    for($i = 0; $i < strlen($n); $i++) {
        $g = ((int)((string)$n)[$i]) * 10**(strlen($n)-$i - 1);
        if($g == 0){
            continue;
        }
        array_push($resultString, $g);
    }
    return join(" + ", $resultString);
}
echo expanded_form(1023001);