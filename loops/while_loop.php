<?php 

    // $a = 0;
    // while ($a <= 10) {
    //     echo 'number '.$a;
    //     echo '<br>';
    //     $a+=2;
    // }
    
    $min_price = 10000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <form action="">
        <div class="row justify-content-center">
            <div class="col-6">

            </div>
            <label for="">Min Price</label>
            <select name="" id="" class="form-control">
                <option value="" selected disabled>Select Min Price</option>

                <?php while ($min_price <= 100000) { ?>
                    
                    <option value="<?php echo $min_price ?>">
                        
                        <?php echo number_format($min_price) ?>
                    
                    </option>

                    <?php $min_price+= 10000; ?>

                <?php } ?>

            </select>
        </div>
    </form>
</body>
</html>