<?php
function snail(array $array): array
{
    if(Count($array) != Count($array[0])){
        return [];
    }
    $snailArray = [];
    $bv = 1; # 1 - right, 2 - down, 3 - left, 4 - up
    $opercount = 0;
    $i = 0;
    $j = 0;
    $i_stop = 0;
    $j_stop = 0;
    $len = Count($array);
    while (true) {
        if($opercount >= $len**2){
            break;
        }
        switch ($bv) {
            case 1:
                if ($j < $len - $j_stop - 1 || $opercount+1==$len**2) {
                    $snailArray[] = $array[$i][$j];
                    $j++;
                    $opercount++;
                }else {
                    $bv = 2;
                }
                break;
            case 2:
                if ($i < $len - $i_stop - 1) {
                    $snailArray[] = $array[$i][$j];
                    $i++;
                    $opercount++;
                }else {
                    $bv = 3;
                    $i_stop++;
                }
                break;
            case 3:
                if ($j > $j_stop || $opercount+1==$len**2) {
                    $snailArray[] = $array[$i][$j];
                    $j--;
                    $opercount++;
                }else {
                    $bv = 4;
                    $j_stop++;
                }
                break;
            case 4:
                if ($i > $i_stop) {
                    $snailArray[] = $array[$i][$j];
                    $i--;
                    $opercount++;
                }else {
                    $bv = 1;
                }
                break;
        }
    }
    return $snailArray;
}
$array5 = [[1,2,3,4,5],[6,7,8,9,10],[11,12,13,14,15],[16,17,18,19,20],[21,22,23,24,25]];
$array4 = [[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16]];
$array3 = [[1,2,3], [4,5,6], [7,8,9]];
var_dump(snail($array5));