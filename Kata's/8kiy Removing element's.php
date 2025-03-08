<?php
function removeEveryOther($array)
{
$newArray = [];
for($i = 0; $i < Count($array); $i+=2)
{
array_push($newArray, $array[$i]);
}
return $newArray;
}
$g = removeEveryOther([1,2,3,4,5,6,7,8,9]);
for($i = 0; $i < Count($g); $i++){
    echo $g[$i];
}
?>