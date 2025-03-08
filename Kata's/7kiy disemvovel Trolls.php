<?php
function disemvowel($string) {
    $newString = "";
    for($i = 0; $i < strlen($string); $i++){
        if(! in_array($string[$i], ["e","E","u","U","i", "I", "o", "O", "a", "A"])){
            $newString = $newString.$string[$i];
        }
    }
    return $newString;
}
?>