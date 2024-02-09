<?php
$arSchedule = [
    [
        'weekday' => 'Monday',
        'openTime' => '9:00',
        'closeTime' => '21:00',
    ],
    [
        'weekday' => 'Tuesday',
        'openTime' => '9:00',
        'closeTime' => '21:00',
    ],
    [
        'weekday' => 'Wednesday',
        'openTime' => '9:00',
        'closeTime' => '21:00',
    ],
    [
        'weekday' => 'Thursday',
        'openTime' => '9:00',
        'closeTime' => '21:00',
    ],
    [
        'weekday' => 'Friday',
        'openTime' => '9:00',
        'closeTime' => '21:00',
    ],
    [
        'weekday' => 'Saturday',
        'openTime' => '10:00',
        'closeTime' => '18:00',
    ],
    [
        'weekday' => 'Sunday',
        'openTime' => '10:00',
        'closeTime' => '18:00',
    ],
];

$date = '10.10.2024';
$time = '19:00';
$visitDate = new DateTime($date . ' ' . $time);

foreach ($arSchedule as $weekday) {
    if ($weekday['weekday'] == $visitDate->format('l')) {
        $openTime = new DateTime($date . ' ' . $weekday['openTime']);
        $closeTime = new DateTime($date . ' ' . $weekday['closeTime']);
        if ($visitDate > $openTime and $visitDate < $closeTime) {
            $dif = ($closeTime->getTimestamp() - $visitDate->getTimestamp()) / 60;
            echo 'магазин закроется через: ' . $dif . ' минут';
        } else {
            echo 'зыкрыто';
        }
        break;
    }
}
