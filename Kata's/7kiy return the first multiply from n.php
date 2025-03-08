<?php
function multiples(int $m, float $n): array
{
    $array = [];
    for($i = 0; $i < $m; $i++){
        array_push($array, ($i + 1) * $n);
    }
    return $array;
}
?>