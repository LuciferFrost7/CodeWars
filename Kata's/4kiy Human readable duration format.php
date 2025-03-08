<?php
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
echo format_duration(62);
