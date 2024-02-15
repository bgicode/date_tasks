<?php
$arPeriods = [
    [   
        'tack' => 'tack1',
        'start'=> '02.10.2017 16:20:11',
        'end'=> '02.10.2017 15:20:11'
    ],
    [
        'tack' => 'tack2',
        'start'=> '03.10.2017 13:12:11',
        'end'=> '03.10.2017 16:40:40'
    ]
];

foreach ($arPeriods as $period) {
    if (!empty($period['start']) and !empty($period['end'])) {
        $start = strtotime($period['start']);
        $end = strtotime($period['end']);
        $secondsTotal = $end - $start;
        if ($secondsTotal < 0) {
            echo 'В заднании ' . $period['tack'] . ' дата начала указанно позже даты конца: ';
            echo '<br>';
        } else {
            $minutesTotal = floor($secondsTotal / 60);
            $hours = floor($minutesTotal / 60);
            $minutes = $minutesTotal - $hours * 60;

            echo 'Для ' . $period['tack'] . ' затрачено: ' . $hours . ' часов и ' . $minutes . ' минут';
            echo '<br>';
        }
    } else {
        echo 'Для оценки затраченного времени на ' . $period['tack'] . ' данных не достаточно: ';
        echo '<br>';
    }
}
