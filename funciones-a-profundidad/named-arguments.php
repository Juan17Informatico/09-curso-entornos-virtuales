<?php 

/**
 * This only works in > 8.0
 *
 * @param [type] $name
 * @param [type] $age
 * @param [type] $country
 * @return void
 */
function get_person_info($name, $age, $country){
    echo "Tengo la información de $name, tiene $age años y vive en $country"; 
}

get_person_info(
    age: 14,
    country: "Mexico",
    name: "Pandaciosocio"
); 