<?php 
    // If Syntax

    // gender must be woman
    // age must be 18 and above and below 60
    $users = [
            [
                "name" => "Tunde Abayomi",
                "gender" => "male",
                "age" => 40
            ],
            [
                "name" => "Simbi",
                "gender" => "female",
                "age" => 16
            ],
            [
                "name" => "Alex",
                "gender" => "male",
                "age" => 90
            ],
            [
                "name" => "Shola",
                "gender" => "female",
                "age" => 70
            ],
            [
                "name" => "Yemi",
                "gender" => "female",
                "age" => 43
            ]

        ];

    $user = $users[4];
    /*if( $user['gender'] === 'female' && $user['age'] >= 18 && $user['age'] < 60 ){
        echo 'Congrats!!! You are eligible for the Women in Business Offer';
    }*/

    /* if the user is a woman above 18 years, offer a consolation price, otherwise, return a rejection message

    */
    /*if($user['gender'] === 'female' && $user['age'] >= 18){
        echo "You are only eligible for a consolation offer";
    }else{
        echo "You have been rejected";
    }*/


    /* 
    Check If a user is a woman from 18 years and above and less than 60, offer star price
    Otherwise Check If the user is a woman from 18 years and above , offer consolation price
    otherwise, if the user is a woman , offer charity price,
    otherwise, disqualify the user

    */

    /*if( $user['gender'] === 'female' && $user['age'] >= 18 && $user['age'] < 60 ){
        echo "Congrats!!! You are eligible for a Star Price";
    }elseif($user['gender'] === 'female' && $user['age'] >= 18 ){
         echo "Put up a smile, You are eligible for a consolation Price";
    }elseif($user['gender'] === 'female'){
        echo "Not a Bad one, You are eligible for a charity Price";
    }else{
        echo "Oops!!! We are sorry, but this price is for women only";
    }*/



    /*

        If the color is yellow, tell user it contains full vitamin C
        if it is orange, contains small vitamn C
        else it does not contain vitamin C
    */
    $fruits = [
        [
            "name"=>"guava",
            "color" => "yellow" 
        ],
        [
            "name" => "orange",
            "color" => "orange"
        ],
        [
            "name"=>"Avocado",
            "color" => "Brownish"
        ],
        [
            "name"=>"bananna",
            "color" => "yellow" 
        ],
    ];

    $fruit_color = $fruits[2]['color'];

    switch ($fruit_color) {
        case 'yellow':
            echo "Contains Large Amount of Vitamin C";
            break;

        case 'orange':
            echo "Contains Small amount of Vitamin C";
            break;
        
        default:
            echo "Does not contain vitamin C";
            break;
    }
?>