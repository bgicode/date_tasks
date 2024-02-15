<?php
$monthNumber = 5;
$day = 1;
$newDay = 1;

$monthNow = mktime(0, null, null, $monthNumber, $newDay, null);
$monthNext = mktime(0, null, null, $monthNumber + 1, $day, null);

while ($monthNow < $monthNext) {
    echo date('d-m-Y', $monthNow) . '<br>';
    $newDay++;
    $monthNow = mktime(0, null, null, $monthNumber, $newDay, null);
}
