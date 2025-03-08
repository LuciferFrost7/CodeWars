<?php
function tower_builder(int $n): array {
    $floorLen = ($n*2);
    $array = [];
    for($i = 0; $i < $n; $i++){
        $stroka = "";
        for($j = 0; $j < $floorLen-1; $j++){
            if($n - $i - 1 > $j || $j - $i >= $n){
                $stroka .= " ";
            }else{
                $stroka .= "*";
            }
        }
        array_push($array, $stroka);
    }
    return $n == 1? ['*']:$array;
}
