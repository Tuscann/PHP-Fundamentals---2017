<?php

$months = array('Януари', 'Февроари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
$days = array('По', 'Вт', 'Ср', 'Че', 'Пе', 'Сб', 'Не');


echo '<table border="0"  width="60%">';
echo '<tr><th>';
echo '<h1>' .  date('Y') . '</h1><hr>';
echo '</th></tr> ';

echo '<tr>';
    echo '<td>';
        echo '<table border="0"  width="100%"><tr>';
            for ($i=1; $i <=12; $i++) {
                if ($i == 4 + 1 || $i == 8 + 1) {
                    echo '</tr><tr>';
                }

                $dayNumber = cal_days_in_month(CAL_GREGORIAN, $i, date('y'));
                $numberDayOfWeek = date("N", mktime(0, 0, 0, $i, 1, date('y')));


// Първо отваряне

                echo '<th>';
                echo '<table><tr><th>' . $months[$i - 1];
                echo '</th></tr>';
                echo '<tr><th><table>';
                echo '<tr>';
                for ($d=0; $d<7; $d++) {
                    echo '<th >';
                    echo '<hr>';
                    if ($d == 6) {
                        echo '<H7><font color="red">' . $days[$d] . '</font>  </H7>';
                    } else {

                        echo '<H7>' . $days[$d] . '  </H7>';
                    }
                    echo '<hr>';
                    echo '</th>';
                }
                echo '</tr>';

                echo '<tr>';

                for ($dayOfWeek= 1; $dayOfWeek<=$dayNumber+$numberDayOfWeek-1; $dayOfWeek++) {

                    if ($dayOfWeek < $numberDayOfWeek) {
                        echo '<th>';
                        echo ' ';
                        echo '</th>';
                    } else {
                        echo '<th>';
                        echo $dayOfWeek-$numberDayOfWeek+1;
                        echo '</th>';
                    }
                    if ( $dayOfWeek % 7 == 0) {
                        echo '</tr><tr>';
                    }
                }

                echo '</table></th></tr>';

echo '</table>';
            }
?>