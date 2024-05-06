<?php

// $numbers = [1,2,3,4]; 

// $numbers_by_2 = array_map(fn($current) => $current * 2, $numbers);

// var_dump($numbers_by_2); 



// $cajero = 0; 

// $add_cajero = fn($add) => $cajero + $add; 

// echo $add_cajero(20); 


// $edades = [5, 21, 50, 18]; 

// $mayores_de_edad = array_filter($edades, function($current){
//     return $current >= 18; 
// }); 

// $mayores_de_edad = array_filter($edades, fn($current) => $current >= 18); 

// print_r( $mayores_de_edad); 

$where_am_i = "México"; 

$change_where_am_i = fn(&$where_am_i) => $where_am_i = "Colombia"; 
$change_where_am_i($where_am_i);

echo $where_am_i; 