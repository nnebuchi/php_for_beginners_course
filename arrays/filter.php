<?php

    function lessThan20($element){
        return $element < 20;
    }
    $numbers = [10, 40, 5, 32, 33, 11, 60, 22];

    $numberLessThan20 = array_filter($numbers, "lessThan20");

    // print_r($numberLessThan20);

    function greaterThan20($element){
        return $element > 20;
    }
    $numbersGreaterThan20 = array_filter($numbers, "greaterThan20");
    print_r($numbersGreaterThan20);
?>