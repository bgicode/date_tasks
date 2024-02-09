<?php
$startDate = new DateTime('yesterday 10:00:00');
$endDate = new DateTime('yesterday 17:30:00');

while ($startDate < $endDate) {
    echo $startDate->format('H:i') . '-';
    $startDate->modify('+45 minute');
    echo $startDate->format('H:i');
    $startDate->modify('+15 minute');
    echo '<br>';
}
