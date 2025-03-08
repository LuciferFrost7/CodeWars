<?php
function square_sum($numbers) : int
{
$summa = 0;
for($i = 0; $i < Count($numbers); $i++){
$summa += $numbers[$i] * $numbers[$i];
}
return $summa;
}
?>