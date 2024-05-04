<?php 

/**
 * Declaraciones de tipo de devolución
 *
 * @param integer $n1
 * @param integer $n2
 * @return integer
 */
function suma(int $n1, int $n2) : int {
    return ($n1 + $n2); 
}

echo suma(1,2); 