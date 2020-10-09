<?php

$perdana = [
    ["Axis", "2GB", 15000],
    ["Axis", "5GB", 34999],
    ["Smartfren", "5GB", 17000],
    ["Smartfren", "10GB", 35000],
    ["Tri", "2GB", 22000],
    ["Tri", "6GB", 39000]
];

$temp_arr=[];

foreach($perdana as $key)
{
    $temp_arr[]=$key[0];
}

// $result=array_unique($key);
// var_dump($temp_arr);
// var_dump($temp_arr);

$result=array_unique($temp_arr);
foreach($result as $key_a)
{
    echo $key_a."\n";
}