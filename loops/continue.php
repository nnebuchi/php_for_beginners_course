<?php
    // Write program to loop through a series of number but excludes mulitples of 11;
    $numbers = [10, 40, 5, 32, 33, 11, 60, 22];

    foreach ($numbers as $number) {
        if($number % 11 === 0){
            continue;
        }
        echo $number."reported";
        echo "<br>";
    }

?>