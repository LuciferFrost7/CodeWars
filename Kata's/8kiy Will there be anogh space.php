<?php
function enough($cap, $on, $wait) {
    return $cap - $on < $wait ? $wait - ($cap - $on) : 0;
}
?>
