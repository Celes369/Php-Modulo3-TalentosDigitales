<?php
/*
// Ejemplos dados en clase
echo sqrt(25); // Devuelve la raíz cuadrada de un número en este caso de 25
echo '<br>'.rand(1, 100); // Devuelve un número aleatorio entre dos extremos en este caso entre 1 y 100
echo '<br>'.pi(); // Devuelve el valor de pi
echo '<br>'.floor(4.3); // Devuelve redondeo hacia abajo
echo '<br>'.ceil(4.6); // Devuelve redondeo hacia arriba
echo '<br>'.round(3.4); // Devuelve redondeo a entero
echo '<br>'.round(3.5); // Devuelve redondeo a entero
*/
// Estructura de la función
//string number_format ( float $number [, int $decimals = 0 ] [, string $dec_point = "." ] [, string $thousands_sep = "," ] );

$numero = 1234567.89;
$numero_formateado = number_format($numero, 2, ',', '.');

echo "Número original: $numero <br>"; // Imprimirá: Número original: 1234567.89
echo "Número formateado: $numero_formateado <br>"; // Imprimirá: Número formateado: 1.234.567,89

