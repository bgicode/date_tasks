<?php

$dateVar = '01-02-2024';
$date = new DateTime($dateVar);
$endDate = new DateTime($dateVar);

$endDate->modify('+1 month');

while ($date < $endDate) {
    if ($date->format('N') < 7) {
        echo $date->format('d-m-Y') . "</br>";
    } elseif ($date->format('N') == 7) {
        $date->modify('+1 day');
        echo $date->format('d-m-Y') . "</br>"; 
    }
    $date->modify('+4 days');
}
