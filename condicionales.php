<?php
/* Formatos de un condicinal simple
-> Formato 1: 

if (Condición){
acción
}

-> Formato 2: 

if (Condición) : 
    acción
endif;


// Ejemplo 1 condicional simple if
$numero = 10;

if ($numero > 0) { // como 10 mayor que 0 imprime "El número es positivo"
    echo "El número es positivo";
}

// Ejemplo 2 condicional simple if
$numero = -10;

if ($numero > 0) { // como -10 no es mayor que 0 no hace nada 
    echo "El número es positivo";
}

// Ejemplo 1 condicional if-else
$numero = -10;

if ($numero > 0) { 
    echo "El número es positivo";
}else{
    echo "El número es negativo"; // Imprime esta línea
}

// Ejemplo 1 else-if
$numero = 0;

if ($numero > 0) {
    echo "El numero es positivo";
} elseif ($numero < 0) {
    echo "El numero es negativo";
} else {
    echo "El Cero es Neutro, ni positivo ni negativo"; // Imprime esta línea
}
*/

// Ejemplo 2 else-if
$nota = 50;

if ($nota >= 90) {
    echo "Aprobado con A";
} elseif ($nota >= 80) {
    echo "Aprobado con B";
} elseif ($nota >= 70) {
    echo "Aprobado con C"; 
} else {
    echo "Reprobado"; // Imprime esta línea
}




