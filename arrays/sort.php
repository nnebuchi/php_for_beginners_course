<?php

    $phones = ['samsung', 'iPhone', 'pixel', 'infinix'];

    $pcs = ['macbook', 'chrome book', 'surface', 'dell'];
    array_multisort($phones, $pcs);
    // sort($pcs);
    print_r($phones);
    echo '<br>';
    print_r($pcs);


 ?>