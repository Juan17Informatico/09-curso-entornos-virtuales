<?php 


$cat = "Meow!";

function makeCatBark(&$cat_dog){
    $cat_dog = "Woof!";
}

makeCatBark($cat);

echo $cat; 

echo "\n"; 

