<form method="get">
    <input type="text" name="firssName" ><br>
    <input type="text" name="age"><br>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="submit" name="submit" value="Изпрати">

</form>
<?php
    if (isset($_GET['submit'])) {
        if (!$_GET['firssName'] || !$_GET['age']) {
            echo 'Липсват данни';
        } else {
            $name = $_GET['firssName'];
            $age = $_GET['age'];
            $gender = $_GET['gender'];
            echo "My Name is {$name}. I am {$age} years old. I am  {$gender}.";
        }
    }
?>