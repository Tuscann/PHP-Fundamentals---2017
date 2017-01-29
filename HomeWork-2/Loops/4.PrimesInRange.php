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
    .peti {
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
                Start Index <input type="text" name="start" size="5">
                End Index <input type="text" name="end"  size="5">
                <input type="submit" value="Show cost" name="submit">
            </form>
        <?php
        if (isset($_GET['submit'])) {
            $start = $_GET['start'];
            $end = $_GET['end'];
            $is_prime = false;

            for ($i = $start; $i <= $end; $i++ ) {
                $counter = 0;
                for ($j=1; $j<= $i; $j++) {
                    if ($i % $j == 0) {
                        $counter++;
                    }
                }
                if ($counter == 2) {
                 echo "<b>$i</b> ";
                } else {
                    echo $i . ' ';
                }

            }
        }

        ?>
        </span>
</div>