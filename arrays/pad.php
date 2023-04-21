<?php
    $jurors = ["Kyle", "Chris", "Ann", "Anderson", "Christy","Charlie","Karls", "Ngozi", "Tom", "John", "Jane", "Andrew"];
    $padded_jurors = array_pad($jurors, 14, "Coming Soon");
    print_r($padded_jurors);
 ?>