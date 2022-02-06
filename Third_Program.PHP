<!DOCTYPE html>
<html>
<body>
<?php
    $x = 655;
    echo var_dump(is_int($x));
    echo "<br>";

    $y = 4.1;
    echo var_dump(is_int($y));
    echo "<br>";

    $z = 2000.5;
    echo var_dump(is_float($z));
    echo "<br>";

    $m="farah";
    echo var_dump(is_numeric($m));
    echo "<br>";

    echo min(0,100,-30,20);
    echo "<br>";
   
    echo max(0,100,-30,20);
    echo "<br>";
   
    echo (abs(-1258));
    echo "<br>";

    echo round(6.1);
    echo "<br>";
    echo round(4.6);
    echo "<br>";
   
    echo (rand());
    echo "<br>";
    
       ?>
    </body>
</html>
