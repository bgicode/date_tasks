<?php
$date1 = strtotime("2016-01-01 00:00:00");
$date2 = strtotime("2015-10-01 00:00:00");
$format = 'd-m (Y)';

if ($date1 < $date2) {
    echo date($format, $date1);
} else {
    echo date($format, $date2);
}
