<?php 
// array_slice(array, start, length, preserve);
$fruits = ['apricot', 'fig', 'garden egg', 'apple', 'grape', 'mango'];
$segment = array_slice($fruits, 0, 4);
print_r($segment);

?>