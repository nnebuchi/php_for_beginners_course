<?php 
    // IMPLODE: converts an array into a string using a seprator

    $phones = ["09098484838", "0808747333", "07059983321"];
    $phone_str = implode(",", $phones);
    echo  $phone_str;
?>