<?php
/* Operadores ternarios 
-> formato
condición ? expresión_verdadera : expresión_falsa;


// Ejemplo 1
$sexo = 'f';

echo($sexo == 'm') ? "Sexo masculino " :  "Sexo femenino";

// Ejemplo 2 
$edad = 20;
$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
echo $mensaje;
*/
// Ejemplo 3 
$numero1 = 20;
$numero2 = 10;
($numero1 < $numero2) ? $total = $numero1*$numero2 : $total = $numero1+$numero2;
echo $total; // Imprime la suma de las variables que da 30 en este caso