<?php
$today = getdate();
$lastday = mktime(1,0, 0, 1,1, date('y')+1);
$diff = $lastday - $today[0];

//проверка за зимно или лятно часово време
if (date("I", $today[0]) > 0) {
    $diff -= 60* 60;
}


echo 'Hours until new year : '. round($diff/(60*60)) . '<br>' ;
echo 'Minutes until new year : ' . round($diff/60) . '<br>';
echo  'Seconds until new year : ' . round($diff) . '<br>';
echo "Days:Hours:Minutes:Seconds " . round($diff / (60*60*24)) . ":" . date("H:i:s", $today[0]);
