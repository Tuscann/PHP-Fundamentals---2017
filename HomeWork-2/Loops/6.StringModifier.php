<style>
    #first{
        background: lightgoldenrodyellow;
        border: solid 1px;
        float: left;
        width: 100px;
        height: 50px;
        text-align: center;
        padding-top: 20px;
    }
    .second {

        border: solid 1px;
        float: left;
        width: 900px;

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
               Input String: <input type="text" name="text" size="20">

                 <input type="radio"  name="options" value="palindrom" checked> Check Palindrom
                 <input type="radio"  name="options" value="reverse"> Reverse String
                <input type="radio"   name="options" value="split"> Split
                 <input type="radio"  name="options" value="hash"> Hash String
                <input type="radio"   name="options"  value="shuffle"> Shuffle String
                <input type="submit" value="Show cost" name="submit">
            </form>
<?php
if(isset($_GET['submit'])) {
    if ($_GET['text']) {
        $words = array_map('trim', explode(',', $_GET['text']));
        $options = $_GET['options'];
        if ($options == "palindrom") {
        for ($j = 0; $j < count($words); $j++) {
            $is_palindrom = true;
                $count = strlen($words[$j]);
                $counter = 0;
                for ($i = 0; $i < $count / 2; $i++) {

                    if ($words[$j][$i] != $words[$j][$count - $i - 1]) {
                        $is_palindrom = false;
                    }
                }
                if ($is_palindrom == 'true') {
                    echo $words[$j] . " Е палиндром";
                } else {
                    echo $words[$j] . " Не е палиндром";
                }
            }

            } else if ($options == "reverse") {
            for ($i = count($words) - 1; $i >= 0; $i--) {
                for ($j = strlen($words[$i]) - 1; $j >= 0; $j--) {
                    echo $words[$i][$j];
                }
                echo ' ';
            }
        }    else if ($options == "split") {
            for ($i = 0; $i < count($words); $i++) {
                for ($j = 0; $j < strlen($words[$i]); $j++) {
                    echo $words[$i][$j] . ' ';
                }
            }
            } else if ($options == "hash") {
            for ($i = 0; $i < count($words); $i++) {
                echo hash('sha256', $words[$i], false) . '<br>';
            }
        } else {
            $arr = array();
            for ($i = 0; $i < count($words); $i++) {
                for ($j=0; $j < strlen($words[$i]); $j++) {
                    array_push($arr, $words[$i][$j]);
                }
                if (!$i == count($words)-1) {
                    array_push($arr, ' ');
                }
                shuffle($arr);
                foreach ($arr as $value) {
                    echo $value;
                }

            }




        }

        } else {
        echo 'Полетата са задължителни';
    }


}
?>