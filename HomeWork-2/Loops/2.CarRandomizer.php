<form method="get">
  Enter cars:  <input type="text" name="cars">
               <input type="submit" name="submit" value="Show results">
</form>

<?php
$html = "<table border='1'><tr><th>Cars</th><th>Colors</th><th>Counts</th></tr>";

if (isset($_GET['submit'])) {
    $numbers = range(1, 5);
    $colors = ['green', 'red', 'blue', 'silver', 'black', 'grey', 'white' ];
    shuffle($numbers);
    shuffle($colors);

    $cars_arr = array_map('trim' ,explode(',',$_GET['cars']));
    for ($i=0;$i< count($cars_arr); $i++) {

        $html .= "<tr></tr><th>$cars_arr[$i]</th>";
        $html.= "<th>$colors[$i]</th>";
        $html .= "<th>$numbers[$i]</th></tr>";
    }
}
echo $html;



