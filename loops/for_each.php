<?php
    
    $userProfile = [
        "firstname" => "David",
        "lastname"  => "Jones",
        "age"       => 45
    ];

    $grocery = ["Milk", "Chocolate", "Fish", "Meat"];

    /*foreach ($userProfile as $key => $value) {
        echo "User's ".$key." is ".$value;
        echo "<br>";
    }*/

    /*
    //if you will need the index in the iteratiion, we use this syntax
    foreach ($grocery as $index => $food) {
       echo $index;
       echo "<br>";
    }
    
    foreach ($grocery as $index => $food) {
       echo $value;
       echo "<br>";
    }
    */

    //if you will not need the index in the iteratiion, we use this syntax
    /*foreach ($grocery as $food) {
        echo $food;
        echo "<br>";
     }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="table-responsive">
                <table class="table table-striped table-secondary">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Fruit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php foreach ($grocery as $key => $value) {?>
                            <tr>
                                <td><?php echo $key +1 ?></td>
                                <td><?php  echo $value ?></td>
                            </tr>
                       <?php } ?>
                         -->

                        <?php $count = 0; ?>
                       <?php foreach ($grocery as $value) {?>
                            <?php $count ++; ?>
                            <tr>
                                <td><?php echo $count ?></td>
                                <td><?php  echo $value ?></td>
                            </tr>
                       <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>