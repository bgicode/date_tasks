<?php
$startDate = strtotime('now 08:00:00');
$endDate = strtotime('now 17:30:00');

while (strtotime('+45 minute', $startDate) < $endDate) {
    echo date('H:i' , $startDate) . '-';
    $startDate = strtotime('+45 minute', $startDate);
    echo date('H:i' , $startDate);
    $startDate = strtotime('+10 minute', $startDate);;
    echo '<br>';
}
