<?php
/*
do {
    // Código a ejecutar al menos una vez
} while (condición);
*/

// Las tablas de multiplicar del 3 desde 0 hasta 10
$multiplicando = 3;
$multiplicador = 0;
$tope = 10;

echo "Tabla de multiplicar del $multiplicando :<br>";
do {
    $producto = $multiplicando * $multiplicador;
    echo "$multiplicando x $multiplicador = $producto<br>";
    $multiplicador++;
} while ($multiplicador <= $tope);

