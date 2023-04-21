<?php
    // array_merge
    $phones = ['samsung', 'iPhone', 'pixel', 'infinix'];

    $pcs = ['macbook', 'chrome book', 'surface', 'dell'];

    $gadgets = array_merge($phones, $pcs);

    // print_r($gadgets);


    //array_merge_recursive
    $suspect1 = [
        "pc"=>"Macbook",
        "phone"=>'Samsung',
        'car'=>'benz'
    ];

    $suspect2 = [
        'pc'=>'surface',
        'phone'=>'iphone'
    ];

    $total_properties = array_merge_recursive($suspect1, $suspect2);
    
    // print_r($total_properties);

    array_multisort($phones, $pcs);
    // sort($pcs);
    print_r($phones);
    echo '<br>';
    print_r($pcs);

    
 ?>