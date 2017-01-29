<?php
$html = "<table border='1'><tr><td>Число</td><td>Корен</td></tr>";
for ($i=0; $i<=100; $i++) {
    $html .="<tr><td>$i</td>";
    $root = round(sqrt($i),2);
    $html .="<td> $root </td></tr>";
}
$html .="</table>";

echo $html;