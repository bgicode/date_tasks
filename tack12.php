<?php
$bookedPeriods = ['12.09.2017', '14.09.2017-02.10.2017'];
$bookingDate = '15.11.2017-17.11.2017';
$bookingPeriod = array();
$bookedDates = array();
foreach ($bookedPeriods as $dates) {
    if (strpos($dates, '-')){
        $onePeriod = explode('-', $dates);
        $start = new DateTime($onePeriod[0]);
        $end = new DateTime($onePeriod[1]);
        $periodDetail = new DatePeriod($start, new DateInterval('P1D'), $end, DatePeriod::INCLUDE_END_DATE);
        foreach ($periodDetail as $periodDate) {
            $bookedDates[] = $periodDate->format('d.m.Y');
        }
    }else{
        $bookedDates[] = $dates;
    }
};
if (strpos($bookingDate, '-')){
    $newBookingPeriod = explode('-', $bookingDate);
    $newStart = new DateTime($newBookingPeriod[0]);
    $newEnd = new DateTime($newBookingPeriod[1]);
    $newPeriodDetail = new DatePeriod($newStart, new DateInterval('P1D'), $newEnd, DatePeriod::INCLUDE_END_DATE);
    foreach ($newPeriodDetail as $periodDate) {
        $bookingPeriod[] = $periodDate->format('d.m.Y');
    }
} else {
    $bookingPeriod[] = $bookingDate;
}
if (empty(array_intersect($bookedDates, $bookingPeriod))){
    $bookedPeriods[] = $bookingDate;
} else {
    echo 'дата занята';
}
echo '<pre>';
print_r($bookedPeriods);
echo '</pre>';