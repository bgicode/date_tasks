<?php
$arPeriods = [
    [   
        'tack' => 'tack1',
        'start'=>'02.10.2017 10:12:11',
        'end'=>'02.10.2017 15:20:11'
    ],
    [
        'tack' => 'tack2',
        'start'=>'03.10.2017 13:12:11',
        'end'=>'03.10.2017 16:40:40'
    ]
];

foreach ($arPeriods as $value) {
    $start = new DateTime($value['start']);
    $end = new DateTime($value['end']);

    $secondsTotal = $end->getTimestamp() - $start->getTimestamp();
    $minutesTotal = floor($secondsTotal / 60);
    $hours = floor($minutesTotal / 60);
    $minutes = $minutesTotal - $hours * 60;

    echo 'Для ' . $value['tack'] . ' затрачено: ' . $hours . ' часов и ' . $minutes . ' минут';
    echo '<br>';
}
