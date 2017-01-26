<?php
$startNumber = 1234;

if ($startNumber < 102) {
    echo 'No';
} else {
    for ($i=102; $i <= $startNumber; $i++ ) {
        $i = (string)$i;
        $v = strlen($i);
        $counter = 0;
        for ($j = 0; $j < $v; $j++) {
            for ($s = 0; $s < $v; $s++) {
                if ($i[$j] == $i[$s]) {
                    $counter++;
                } else {
                    continue;
                }
            }
        }
        if ($counter <= strlen((string)$startNumber)) {
            echo $i . ' ';
        }
    }
}

?>