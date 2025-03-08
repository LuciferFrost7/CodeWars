function elimination($arr){
    function Count($arr, $value){
        let $count = 0;
        for(let $i = 0; $i < $arr.length; $i++) {
            if($arr[$i] === $value){
                $count++;
            }
        }
        return $count
    }
    for(let $i = 0; $i < $arr.length; $i++){
        if(Count($arr, $arr[$i]) === 2){
            return $arr[$i];
        }
    }
    return null;
}