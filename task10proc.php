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

$date = '05.10.2024';
$time = '9:00';
$visitDate = strtotime($date . ' ' . $time);

foreach ($arSchedule as $weekday) {
    if ($weekday['weekday'] == date('l', $visitDate)) {
        $openTime = strtotime($date . ' ' . $weekday['openTime']);
        $closeTime = strtotime($date . ' ' . $weekday['closeTime']);
        if ($visitDate > $openTime and $visitDate < $closeTime) {
            $dif = ($closeTime - $visitDate) / 60;
            echo 'магазин закроется через: ' . $dif . ' минут';
        } else {
            echo 'зыкрыто';
        }
        break;
    }
}
