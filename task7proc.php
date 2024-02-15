<?php
$now = time();
$start = strtotime('01.01.2024');

while ($start <= $now) {
    if (date('D', $start) == 'Mon') {
        echo date("D, d-m-Y", $start) . "<br>";
        $start = strtotime('+7 days', $start);
    }
}
