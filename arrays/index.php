<?php
    $grocery = ["Milk", "Chocolate", "Fish", "Meat"];

    // Get number and elements in array;
    $grocery_length = count($grocery);
    // echo $grocery_length;
    $numbers = [10, 40, 5, 32, 33, 11, 60, 22];

    // To preserve the original array, we clone the original $grocery into $new_grocery
    // $new_grocery = $grocery;

    // sort($numbers);
    $reversed_numbers = array_reverse($numbers);

    // echo "Reversed array: ";
    // print_r($reversed_numbers);
    // echo "<br>";

    // echo "Original array: ";
    // print_r($numbers);
    // echo "<br>";

    // echo "old grocery: ";
    // print_r($grocery);
    // echo "<br>";

    // echo "new grocery: ";
    // print_r($new_grocery);
    // echo "<br>";


    // $alphabeths = ["b", "k", "d", "a", "e"];
    
    // sort($alphabeths);
    // $arranged_alphabeths = array_reverse($alphabeths);
    // print_r($arranged_alphabeths);

    $arrayName  = array('name' => "Buchi", "Age" => " 35" );
    // $arrayName = ['name' => "Buchi", "Age" => " 35"];
    // $me["name"]="chuks";
    // $me["age"] = "40";

   
    print_r(array_count_values($arrayName));
 ?>