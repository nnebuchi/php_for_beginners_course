<?php 
    $password = "NgoziOk@2022";
    $passwordLength = strlen($password);
    // echo $passwordLength;
    
    
    $cleanPassword = str_replace("@", "#", $password);
    //echo $cleanPassword;

    $email = "ngoziokafor2014@gmail.com";
    echo str_contains($email, "@");
?>