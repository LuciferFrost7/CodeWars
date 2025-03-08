<?php

function digital_root($number): int
{
    return $number == 0 ? 0 : ($number-1) % 9 + 1;
}