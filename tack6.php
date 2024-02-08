<?php
$date = new DateTime('2024-02-10 11:20:0');
$nowdate = new DateTime();
$interval = $date->diff($nowdate);

echo $interval->format("%d") . "<br />";
echo "<pre>";
print_r($interval);
echo "</pre>";
