<?php
$now = new DateTime();
$strat = new DateTime('01.01.2024');
$interval = new DateInterval('P1D');

$period = new DatePeriod(
    $strat,
    $interval,
    $now
);

foreach ($period as $day) {
        if ($day->format('D') == 'Mon') {
            echo $day->format("D, d M y")."<br />";
        }
    }

