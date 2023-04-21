<?php
    $data = [
        "status"=>'success',
        "username" => 'nnesco'
    ];

    if(array_key_exists('status', $data)){
        echo "Status exists";
    }else{
        echo "No status found";
    }
?>