<?php
function secondsInMHD($seconds){
    $minutes = floor($seconds/60) ;
    $hours = floor( $minutes/60);
    $days = floor($hours/24);

    echo $seconds.' секунд это-'.$minutes.' минут, '.$hours.' часов и '.$days.' дней';
};

secondsInMHD(1000000);