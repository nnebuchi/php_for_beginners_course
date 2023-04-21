<?php
session_start();
$token = time();// create a token using the time function

$encrypted_token = md5(sha1(sha1(md5(sha1($token)))));//encrypt the token using multiple encryption layer

$_SESSION['security'] = $encrypted_token;// create a session variable  set the value to the encrypted token

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
<div class="p-5 m-5 bg-danger">
    <div class="row offset-md-2">
        <div class="col-md-8">
            <form action="register.php" method="POST">
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
                <input type="hidden" name="submit" value=<?=$_SESSION['security']?>>
                <div>
                    <button class="form-control btn-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
   
</div>
</body>
</html>