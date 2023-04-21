<?php 
session_start();

// Check if there is "submit" paramneter in the post request.
// Check if the submit parameter has the same value as the session security variable

if(isset($_POST['submit']) && $_POST['submit'] == $_SESSION['security']){
    echo "received";
}else{
    echo "Unauthorised access";
}

//  header('Location: http://localhost:8081/php_course/forms/csrf_form.php');
//  exit;
?>