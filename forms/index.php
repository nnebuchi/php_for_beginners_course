<?php
    session_start();
    // PHP GLOBAL
    /*
    $_SESSION["session_name"] = <session_value>; // how to set a session
    $_SESSION["session_name"] // how to call en exisitng session
    */

    if(isset($_SESSION['email'])){ //chekcing if "email" is in session
        echo $_SESSION['email']; //calling "email" in session
        
    };
    unset($_SESSION['email']); // deleting "email" from session
    
    echo "<br>";
    
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['confirm_password'];

        if(strlen($email) < 1){
            echo "Email is required".'<br>';
        }elseif(strlen($password) < 1){
            echo "Password is required".'<br>';
        }elseif(strlen($c_password) < 1){
            echo "Confirm Password is required".'<br>';
        }elseif($password !== $c_password){
            echo "Password confirmation does not match".'<br>';
        }else{
            // set an arra of user data in session
            $_SESSION['user_data'] = [
                "email"=>$email,
                "password"=>$password
            ];

            
            echo "Registration successfull";
        }

        

    }
    
    if(isset($_SESSION['user_data'])){
        var_dump($_SESSION['user_data']);
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="p-5 m-5 bg-secondary">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <form action="" method="POST">
                <h3 class="text-white text-center">Register Here</h3>
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Your Password">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                </div>
                <div>
                    <input type="submit" name="submit" value="Register" class="btn btn-outline-dark form-control">
                </div>
            </form>
        </div>
    </div>
   
</div>
   
</body>
</html>
