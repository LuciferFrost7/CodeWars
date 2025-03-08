<?php
function sum_intervals(array $in):int
{
    for($i = 0; $i < Count($in); $i++){
        if($in[$i][0] > $in[$i][1]){
            $in[$i] = [$in[$i][1], $in[$i][0]];
        }
    }
    for($i = 0; $i < Count($in); $i++){
        for($d = 0; $d < Count($in); $d++){
            if($d == $i ){continue;}
            if($in[$i][0] <= $in[$d][0] &&  $in[$d][1] <= $in[$i][1]){
                $in[$d] = [0,0];
            }elseif($in[$d][0] <= $in[$i][0] &&  $in[$i][1] <= $in[$d][1]){
                $in[$i] = [$in[$d][0], $in[$d][1]];
                $in[$d] = [0,0];
            }elseif($in[$i][0] < $in[$d][0] && $in[$d][0] < $in[$i][1] && $in[$i][1] < $in[$d][1]){
                $in[$i] = [$in[$i][0], $in[$d][1]];
                $in[$d] = [0, 0];
            }elseif($in[$d][0] < $in[$i][0] && $in[$i][0] < $in[$d][1] && $in[$d][1] < $in[$i][1]){
                $in[$i] = [$in[$d][0], $in[$i][1]];
                $in[$d] = [0,0];
            }elseif($in[$d][0] < $in[$i][0] && $in[$i][0] == $in[$d][1] && $in[$i][0] < $in[$i][1]){
                $in[$i] = [$in[$d][0], $in[$i][1]];
                $in[$d] = [0,0];
            }elseif($in[$i][0] < $in[$d][0] && $in[$d][0] == $in[$i][1] && $in[$d][0] < $in[$d][1]){
                $in[$i] = [$in[$i][0], $in[$d][1]];
                $in[$d] = [0,0];
            }
        }
    }
    $finalArray = [];
    for($i = 0; $i < Count($in); $i++){
        $finalArray[] = $in[$i][1] - $in[$i][0];
    }
    return array_sum($finalArray);
}

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

function format_duration($seconds) {
    if($seconds == 0){
        return "now";
    }
    $timeArray = [];
    $year =(int)($seconds / (60 * 60 * 24 * 365));
    if($year >= 1){
        $seconds %= (60 * 60 * 24 * 365);
        if($year == 1){
            $timeArray[] = $year." year";
        }else{
            $timeArray[] = $year." years";
        }
    }
    $day = (int)($seconds / (60*60*24));
    if($day >= 1){
        $seconds %= (60 * 60 * 24);
        if($day == 1){
            $timeArray[] = $day." day";
        }else{
            $timeArray[] = $day." days";
        }
    }
    $hour = (int)($seconds / (60 * 60));
    if($hour >= 1){
        $seconds %= (60 * 60);
        if($hour == 1){
            $timeArray[] = $hour." hour";
        }else{
            $timeArray[] = $hour." hours";
        }

    }
    $minute = (int)($seconds / 60);
    if($minute >= 1){
        $seconds %= 60;
        if($minute == 1){
            $timeArray[] = $minute." minute";
        }else{
            $timeArray[] = $minute." minutes";
        }
    }
    if($seconds >= 1){
        if($seconds == 1){
            $timeArray[] = $seconds." second";
        }else{
            $timeArray[] = $seconds." seconds";
        }
    }
    if(Count($timeArray) == 1){
        return $timeArray[0];
    }
    $resultString = "";
    for($i = 0; $i < Count($timeArray) - 2; $i++){
        $resultString .= $timeArray[$i].", ";
    }
    $resultString .= $timeArray[Count($timeArray) - 2]." and ".$timeArray[Count($timeArray) - 1];
    return $resultString;
}
?>