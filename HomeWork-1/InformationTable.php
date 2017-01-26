<?php
$name = "Gosho Iliev";
$gsm = '089-888-888-8';
$age = 24;
$address = 'Hadji DImityr'

?>

<table border="1">
    <tr>
        <th bgcolor="orange" align="left" >Name: </th>
        <th align="right">
            <?php echo $name;?>
        </th>
    </tr>
    <tr>
        <th bgcolor="orange" align="left">Phone Number: </th>
        <th align="right"><?php echo $gsm;?></th>
    </tr>
    <tr>
        <th bgcolor="orange" align="left">Age: </th>
        <th align="right"><?php echo $age;?></th>
    </tr>
    <tr>
        <th bgcolor="orange" align="left">Address: </th>
        <th align="right"><?php echo $address;?></th>
    </tr>
</table>
