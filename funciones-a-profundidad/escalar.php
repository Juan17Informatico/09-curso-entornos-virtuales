<?php 

/**
 * Undocumented function
 *
 * @param integer $base
 * @param integer $altura
 * @param string $nombre
 * @return void
 */
function calcular_area_triangulo(int $base, int $altura, string $nombre){    
    return "Hola $nombre, el área de tu triángulo es " . (($base * $altura) / 2) . "!";
}


echo calcular_area_triangulo(10,20,"Juan CA"); 