<?php
// Ejemplo alteración ejecución continue
echo "Del foreach.php de la carpeta foreachExterno (distintos niveles) <br>";
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Imprime todos los impares desde el 1 al 9
foreach ($numeros as $numero) {
    // Si el número es par, saltar esta iteración. 
    if ($numero % 2 == 0) {
        continue;
    }

    echo $numero . "<br>";
}