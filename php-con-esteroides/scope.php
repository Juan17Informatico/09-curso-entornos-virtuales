<?php 

// Ámbito de las variables 

/*
    El scope (o ámbito de las variables) es el contexto en donde 
    una variable es definida. Usualmente, la mayor parte del tiempo una variable tiene un ámbito simple, es decir,
    está disponible en todo el archivo e incluso en otros archivos donde se haga un require. 
*/

// Ámbito local

/*
    Cuando empezamos a usar funciones el ámbito de cualquier variable definida dentro de la función pasa a ser un 
    ámbito local. 

    En otras palabras, esa variable solo existe dentro de esa función. 

    Sin embargo, con la palabra reservada global. Cuando queramos que una variable externa exista dentro de una función
    sin necesidad de pasarla como parámetro podemos usar la palabra reservada "global". 
*/



/**
 * EJEMPLOS: 
 */

// $outside_variable = "Esto es una variable global"; 

// function myFunction () {
//     global $outside_variable; 
//     echo $outside_variable; 
// }

// myFunction();

print_r($GLOBALS); 

echo "\n"; 
