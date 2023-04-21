<?php 
    // Explode: splits string into component array;
    // Example 1: Word Count 
    $colors = "Hello People, I am learning PHP";
    $words = explode(" ", $colors);
    echo count($words);
    print_r($words);


    // Example 2: Handling CSV 
    // CSV
    $csv = "09094849494,09038848883,090938493838,090983883838";
    $numbers = explode(",", $csv);
    foreach ($numbers as $key => $number) {
        echo $number;
        echo "<br>";
    }
    print_r($numbers);
    

?>