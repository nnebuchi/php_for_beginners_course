<?php
    $username = 'root';
    $password = '';
    $host='127.0.0.1';
    $db_name = 'intro';

    $connection = new mysqli($host, $username, $password, $db_name);

    if($connection->connect_error){
        die('Could not connect: '.$connection->connect_error);
    }
    
    $emails_fetch = $connection->query("SELECT email, username FROM users");
    $connection->close();
    $emails = [];
    while ($get_mail = $emails_fetch->fetch_assoc()) {
        array_push($emails, $get_mail);
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
          <th>Email</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $email_count = 1; 
        foreach ($emails as $email) {
        ?>
            <tr>
                <td><?= $email_count?></td>
                <td><?= $email['email'] ?></td>
                <td><?= $email['username'] ?></td>
            </tr>
        <?php
        $email_count ++;
        }
         
        ?>
        
      </tbody>
  </table>
</body>
</html>