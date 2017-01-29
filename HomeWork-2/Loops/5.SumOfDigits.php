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
        width: 600px;

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
               Input String: <input type="text" name="nums" size="50">
                <input type="submit" value="Show cost" name="submit">
            </form>
<?php
        $html = '<center><table border="1">';
        if(isset($_GET['submit'])) {
            $nums = array_map('trim', explode(',', $_GET['nums']));
            for ($i=0; $i< count($nums); $i++) {
                $html .= "<tr></tr><th>$nums[$i]</th>";
                $sum = 0;
                if (is_numeric($nums[$i])){
                   $lengh = strlen($nums[$i]);
                    for ($j=0; $j<$lengh; $j++) {
                      $sum += (int)$nums[$i][$j];

                    }
                    $html .= "<th>$sum</th></tr>";
                } else {
                    $html .= "<th>I cannot sum that</th></tr>";
                }
            }

        }
        $html .="</table>";

        echo $html;
