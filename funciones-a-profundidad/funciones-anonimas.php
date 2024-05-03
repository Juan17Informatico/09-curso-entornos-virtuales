<?php 


/*
    Las funciones anonimas, también llamadas closures en PHP
*/

// $numbers = [1,3,6,5]; 

// $number_by_2 = array_map(function($current){
//     return $current * 2; 
// }, $numbers);

// print_r($number_by_2); 

$michi = [
    "nombre" => "MrMichi",
    "nivelP" => 123
]; 

$change_michi_name = function () use ($michi) {
    echo $michi["nombre"]; 
}

$change_michi_name();