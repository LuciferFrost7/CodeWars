<?php
function alphanumeric(string $s): bool
{
    if (in_array(" ", str_split($s)) or $s == "") {
        return false;
    }else{
        for($i = 0; $i < strlen($s); $i++){
            if(!in_array(strtolower($s[$i]), str_split("0123456789qwertyuiopasdfghjklzxcvbnm"))) {
                return false;
            }
        }
        return true;
    }
}

?>