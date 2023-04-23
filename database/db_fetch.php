<?php
    $username = "root";
    $password = "";
    $db_name  = "intro";
    $host     = "localhost"; //127.0.0.1

    
    $connection = new mysqli($host, $username, $password, $db_name);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $users_fetch = $connection->query("SELECT * FROM `users`");
    // We can convert the result to an array and pass it to the frontend
    $connection->close();
    $users = [];
    while ($user = $users_fetch->fetch_assoc()) {
      array_push($users, $user);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Users</title>
</head>
<body>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>S/N</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $user_count = 1; 
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user_count?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
            </tr>
        <?php
        $user_count ++;
        }
         
        ?>
        
      </tbody>
  </table>
</body>
</html>