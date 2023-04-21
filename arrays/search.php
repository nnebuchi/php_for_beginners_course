<?php 

$depts = [
    "Agric" => 43,
    "Civil" => 60,
    "checmical" => 90,
    "Electrical" => 56,
    "Mechanical" =>87,
    "Petroleum" => 45
];

$key = array_search(45, $depts);
echo $key;
?>