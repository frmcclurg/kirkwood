<?php
    // truncate decimal
    echo '$value = (int) 3.95;  // ';
    $value = (int) 3.95;
    echo $value . "<br>";

    echo '$value = (bool) -1;  // ';
    $value = (bool) -1;
    echo $value ? "TRUE" : "FALSE";
    echo "<br>";

    echo '$value = (float) 3;  // ';
    $value = (float) 3;
    echo var_dump($value) . "<br>";

    // round to nearest integer
    echo '$number = 3.95; <br>';
    echo '$value = (int)($number + 0.5);  // ';
    $number = 3.95;
    $value = (int)($number + 0.5);
    echo $value . "<br>";
?>
