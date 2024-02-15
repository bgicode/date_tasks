<?php
$arBookedPeriods = ['12.09.2017', '14.09.2017-02.10.2017'];
$bookingDate = '15.09.2017';

$arBookingPeriod = array();
$arBookedDates = array();

foreach ($arBookedPeriods as $dates) {
    if (strpos($dates, '-')){
        $arOnePeriod = explode('-', $dates);
        $start = strtotime($arOnePeriod[0]);
        $end = strtotime($arOnePeriod[1]);
        $arPeriodDetail = array();
        while ($start <= $end) {
            $arPeriodDetail[] = date('d.m.Y', $start);
            $start = strtotime('+1 day', $start);
        }

        foreach ($arPeriodDetail as $periodDate) {
            $arBookedDates[] = $periodDate;
        }
    } else {
        $arBookedDates[] = $dates;
    }
};
if (strpos($bookingDate, '-')) {
    $arNewBookingPeriod = explode('-', $bookingDate);
    $newStart = strtotime($arNewBookingPeriod[0]);
    $newEnd = strtotime($arNewBookingPeriod[1]);
    $arNewPeriodDetail = array();
    while ($newStart <= $newEnd) {
        $arNewPeriodDetail[] = date('d.m.Y', $newStart);
        $newStart = strtotime('+1 day', $newStart);
    }

    foreach ($arNewPeriodDetail as $periodDate) {
        $arBookingPeriod[] = $periodDate;
    }
} else {
    $arBookingPeriod[] = $bookingDate;
}
if (empty(array_intersect($arBookedDates, $arBookingPeriod))) {
    $arBookedPeriods[] = $bookingDate;
} else {
    echo 'дата занята';
}

echo '<pre>';
print_r($arBookedPeriods);
echo '</pre>';
