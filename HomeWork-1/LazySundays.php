<?php
$month = cal_days_in_month(CAL_GREGORIAN, date('m'), date('y'));
$mo = date('m');

    for ($i=1; $i<=$month; $i++) {
      $dayOfWeek = mktime(0, 0, 0, $mo, $i, date('y'));
        if (strftime("%A", $dayOfWeek) == "Sunday") {
            echo $i . date("S F, Y") . '<br>';
        }
    }
?>