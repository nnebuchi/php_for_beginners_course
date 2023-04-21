<?php 
    // ==
    /*
        loosely compare values ie it check for value but not for data type
    */
    // ===
    // !=
    // !==
    // > 
    // <
    // >=
    // <=
    // &
    // &&
    // ||

    /*
    echo(50 == '50');//true
    echo(50 == 50);//true
    */
    $allowed_age = 60;
    $user_age = '60';

    /*
    $allowed_age == $user_age;//true
    $allowed_age === $user_age;//false
    $allowed_age === (int)$user_age//true
    */

    /*
    echo $allowed_age != $user_age;//false
    echo $allowed_age !== $user_age;//true;
    */
    
        90 > 100; //true
        90 < 100; // false

        $min_age = 35;
        $my_age = 30;

        $my_age > $min_age; //false
        $min_age < $my_age; // false

        100 > 100; //false
        100 >= 100; //true

        /*
        OR // Only one needs to pass 

        AND // All must pass
        */

        120 <= 90; // false

        120 >= 90; //true

        /*echo (100 > 20 & 30 < 50); // true
        echo (1000 > 40 & 50 > 100); //fals

        echo (1000 > 50 && 40 > 100);//false*/

        
        /*
        //  $status = "success";
        $data = [
            "status"=>'success',
            "username" => 'nnesco'
        ];

        //echo (isset($data['status']) && $data['status'] == 'success');
        
        
        // echo isset($data['status']);

        // echo $data['password'];
        
        $qualified =["Bisi", "Adeola", "Adamu", "Emeka"];
        $exempted = ["Chuks", "Ade"];
        // echo in_array("Bisi", $exempted);
        // must be qualified or must exempted to enrol
        // echo (in_array("Chuks", $qualified) || in_array("Chuks", $exempted));

        // Ternary Operator
        $status = isset($data['status']) ? $data['status'] : "fail";
        
        // echo $status;

        // Nested ternary operator
        $status = isset($data) ? (isset($data['status']) ? $data['status']:'fail' ): 'fail';
        echo $status;
    */
    /* Concatention -- String operators  */
    $firstname = "Ngozi";
    $lastname = "Okafor";
    $statement = "Hello Peeps, My name is ".$firstname." ".$lastname;
    echo $statement;
    
    echo "<br>";
    
    $statement.=" I am into coding.";
    
    
    echo $statement;
        
    /*if(isset($_GET['send'])){
        echo "Received";
    }*/
?>
