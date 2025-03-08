<?php
# history of the sugar man
function findIt(array $seq)
{
    $dict = [];
    for($i = 0; $i < Count($seq); $i++){
        if(!array_key_exists($seq[$i], $dict)){
            $co = 0;
            for($j = 0; $j < Count($seq); $j++){
                if($seq[$j] == $seq[$i]){
                    $co++;
                }
            }
            $dict[$seq[$i]] = $co;
        }
    }
    $minimumCount = 0;
    $minimumThing = 0;
    foreach($dict as $k => $v){
        if($minimumCount > $v || $minimumCount == 0){
            $minimumCount = $v;
            $minimumThing = $k;
        }
    }
    return $minimumThing;
}
echo findIt([1, 1, 2, 3, 4, 4, 4]);