<?php
$date1 = new DateTime("2016-01-01 00:00:00");
$date2 = new DateTime("2015-10-01 00:00:00");
$format = 'd-m (Y)';
if ($date1->format('U') < $date2->format('U')) {
    echo $date1->format($format);
} else {
    echo $date2->format($format);
}
