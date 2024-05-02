<?php


function get_country_name_switch($country = "")
{
    $name = "";


    switch ($country) {
        case 'MX':
            $name = "mexico"; 
            break;
        case 'COL':
            $name = "colombia"; 
            break;
        default:
            $name = "Lo siento, no conozco ese país"; 
            break;
    }

    return $name; 
}

/**
 * This function works only in php version 8 > 
 *
 * @param string $country
 * @return void
 */
function get_country_name_match($country = "")
{


    return match ($country) {
         "MX" => "Mexico",
         "COL"=> "Colombia",
         "EUA"=> "Estados Unidos de America",
         default => "Lo siento no conozco ese país"
    }; 
}

echo get_country_name_match("MX"); 



