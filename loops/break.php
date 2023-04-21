<?php
    // Write program to loop through a series of number and returns the first multiple of 11

    $numbers = [10, 40, 5, 32, 33, 11, 60, 22];

    foreach ($numbers as $number) {
        if($number % 11 === 0){
            echo $number." is the first multiple of 11";
            echo "<br>";
            break;
        }else{
            echo $number." is not a multiple of 11";
            echo "<br>";
        }
    }

?>