<?php

    $name = "Ngozi";
    $kids = [];
    function greet(){
        echo "Hello Ma'am";
    }

    // paramerised

    function salute($username, $sentence){
        $greet =  $sentence." ".$username;
    }

    function hail($sentence){
        global $name;
        $greet = $sentence." ".$name;
        //return $greet;
    }

    function pushValue($value){
        global $kids;
        array_push($kids, $value);
        return $kids;
    }

    $updateKid = pushValue("Mary");
    var_dump($updateKid);
    echo "<br>";
    var_dump($kids);

// $outcome = hail("Welcome");
// echo $outcome;
// salute("Ngozi", "Good Morning");

?>