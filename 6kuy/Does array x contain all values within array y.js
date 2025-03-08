Object.defineProperty( 
    Array.prototype, "containsAll", { value: function containsAll($arr) {
    for(let $i = 0; $i < $arr.length; $i++){
      if(!(this.includes($arr[$i]))){
        return false;
      }
    }
    return true;
  } } );