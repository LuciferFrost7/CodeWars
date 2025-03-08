function keysAndValues($obj){
    $fir = [];
    $sec = [];
    for(let $i in $obj){
      $fir.push($i);
      $sec.push($obj[$i]);
    }
    return [$fir, $sec];
  }