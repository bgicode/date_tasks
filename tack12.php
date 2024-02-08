<?php
$arBookedPeriods = ['12.09.2017', '14.09.2017-02.10.2017'];
$bookingDate = '12.05.2017-17.06.2017';

$arBookingPeriod = array();
$arBookedDates = array();

foreach ($arBookedPeriods as $dates) {
    if (strpos($dates, '-')){
        $arOnePeriod = explode('-', $dates);
        $start = new DateTime($arOnePeriod[0]);
        $end = new DateTime($arOnePeriod[1]);
        $periodDetail = new DatePeriod($start, new DateInterval('P1D'), $end, DatePeriod::INCLUDE_END_DATE);

        foreach ($periodDetail as $periodDate) {
            $arBookedDates[] = $periodDate->format('d.m.Y');
        }
    } else {
        $arBookedDates[] = $dates;
    }
};
if (strpos($bookingDate, '-')) {
    $arNewBookingPeriod = explode('-', $bookingDate);
    $newStart = new DateTime($arNewBookingPeriod[0]);
    $newEnd = new DateTime($arNewBookingPeriod[1]);
    $newPeriodDetail = new DatePeriod($newStart, new DateInterval('P1D'), $newEnd, DatePeriod::INCLUDE_END_DATE);

    foreach ($newPeriodDetail as $periodDate) {
        $arBookingPeriod[] = $periodDate->format('d.m.Y');
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
