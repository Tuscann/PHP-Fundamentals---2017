<style>
    #first{
        background: lightgoldenrodyellow;
        border: solid 1px;
        float: left;
        width: 200px;
        height: 50px;
        text-align: center;
        padding-top: 20px;
    }
    .second {

        border: solid 1px;
        float: left;
        width: 400px;
        height: 50px;
        text-align: center;
        padding-top: 20px;
    }
    .peti {
        border: solid 1px;
        float: left;
        width: 400px;
        height: 50px;
        text-align: center;
        padding-top: 20px;
    }

</style>

<body>
    <div>
        <span id="first">
            <b>Input</b>
        </span>
        <span class="second">
            <form>
                Enter Number of years <input type="text" name="years">
                <input type="submit" value="Show cost" name="submit">
            </form>
        </span>
    </div>
<?php
        if (isset($_GET['submit'])) {
            $years = $_GET['years'];
            $cost = range(0,999);

            $html = "<br><br><br><br><div><table border='1'><tr><th>Year</th>";
            for ($j=1; $j<=12; $j++) {
                $m =  strftime("%B",mktime(0,0,0, $j, 21, 2017));

                $html .= '<th>' . $m . '</th>';
            }
            $html .= '<th>Total Sum</th></tr>';
            $datenow = getdate();
            $datenow= $datenow["year"]-$years;

            for ($i = $datenow+$years-1; $i>=$datenow ; $i--) {
                shuffle($cost);
                $sum =0;
                $html .= "<tr><th>$i</th>";
                for ($j=1; $j<=12; $j++) {
                    $html .="<th>$cost[$j]</th>";
                    $sum += $cost[$j];
                }
                $html .="<th>$sum</th></tr>";
            }
            $html .= "</table>";

            echo $html;
        }
?>
</body>