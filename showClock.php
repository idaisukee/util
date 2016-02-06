<?php
function showClock()
{
    $a = new DateTime(null, new DateTimeZone('Europe/Paris'));
    
    $h = (int) $a->format('H');
    $m = (int) $a->format('i');
    $s = (int) $a->format('s');

    $total_sec = $s + 60 * $m + 60 * 60 * $h;

    $rTime = rTime($total_sec);
    
    echo $rTime;
}


function rTime($total_sec)
{
    $g1day = 60 * 60 * 24;
    $rTime = floor(100000 * $total_sec / $g1day) / 100;
    return $rTime;
}

showClock();