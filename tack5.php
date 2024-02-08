<?php
$month = mktime(0, null,null,5,null,null);
$dateM = date('Y-m-d', $month);
$date = new DateTime($dateM);
$count = $date->format("t");
for ($i=1; $i <= $count; $i++) { 
    echo $i.'_';
}

