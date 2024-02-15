<?php
$date = strtotime('2024-02-30 11:20:0');
$nowdate = time();

if ($date > $nowdate) {
    $dif = date('z', $date) - date('z', $nowdate);
    echo 'осталось: ' . $dif . ' дней/я';
} else {
    $dif = date('z', $nowdate) - date('z', $date);
    echo 'прошло: ' . $dif . ' дней';
}
