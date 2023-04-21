<?php
    // Types of Arrays
    // 1. Distributive Array
    // 2. Associative Array

    $grocery = ["Milk", "Chocolate", "Fish", "Meat"];
    // print_r($grocery);

    // Accessing Distributive Arrays
    // echo ($grocery[1]);

    // Associative:

    $userProfile = [
        "firstname" => "David",
        "lastname"  => "Jones",
        "age"       => 45
    ];

    $userProfile['email'] = "myemaol@gmail.com";
    // print_r($userProfile);
    // s

    // echo "My name is <firstname> <lastname> and I am <age> years old";
    // echo "My name is ".$userProfile["firstname"]." ".$userProfile["lastname"]. " I am ".$userProfile["age"]. " years old";


    // Arrays of Array

    // $school = [
    //     "engineering" => ["Agric", "Civil", "Chemical", "Electrical", "Mechanical", "Petroleum"],
    //     "management"  => ["OIM", "MassComm", "Management", "Accounting"],
    //     "sciences"    => ["Biology", "Chemistry", "Physics"]
    // ];

    
    // print_r($school["sciences"][1]);


    $school = [
        "engineering" => [
            "Agric" => ['Chuks', 'Bright', "Jude"],
            "Civil" => ["Patricia", "Rhino", "Claude"],
            "checmical" => ['Taiwo', "Vivian", "Ebele"],
            "Electrical" => ["Ifeanyi", "Destiny", "Gabriel"],
            "Mechanical" =>["Nancy", "Chioma", "Azubuike"],
            "Petroleum" => ["Buchi", "Kareem", "Galdstone"]
        ],

        "management"  =>  [
            "OIM" => ['Chuks', 'Bright', "Jude"],
            "MassComm" => ["Patricia", "Gladys", "Claude"],
            "Management" => ['Taiwo', "Vivian", "Ebele"],
            "Accounting" => ["Ifeanyi", "Destiny", "Gabriel"],
            
        ],
      
        "sciences"    => [
            "biology" => ['Chuks', 'Bright', "Jude"],
            "chemistry" => ["Patricia", "Rhino", "Claude"],
            "physics" => ['Taiwo', "Vivian", "Ebele"],
        ]
    ];

    print_r($school["sciences"]["chemistry"][1]);




?>