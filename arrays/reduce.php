<?php 

    $numbers = [2, 5, 4, 6];
    // write a  program to modify the array of numbers such that the next element is a sum of the previopus and itself

    function sumPrev($ele1, $ele2){
        return $ele1 + $ele2;
    }

    $modfiedNumbers = array_reduce($numbers, "sumPrev");

    print_r($modfiedNumbers);
?>