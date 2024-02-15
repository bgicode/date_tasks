<?php
$dateVar = '01-02-2024';
$date = strtotime($dateVar);
$endDate = strtotime('+1 month', $date);

while ($date < $endDate) {
    if (date('N', $date) < 7) {
        echo date('d-m-Y', $date) . "</br>";
    } else {
        $date = strtotime('+1 day', $date);
        echo date('d-m-Y', $date) . "</br>"; 
    }
    $date = strtotime('+4 day', $date);
}
