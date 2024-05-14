<?php

// + - / * 
// jerarquía 
/*
1.Parentesis () se ejecuta primero
2.Potencia ** despues de ()
3.Multiplicación o división *,/ 
4.Suma o resta +,-
5.Porcentaje %


$resultado = 2-3+5;
echo "El resultado es: $resultado"; // Imprime El resultado es: 4
echo '<br>';

// Distintas operaciones con dos variables 
$a = 10;
$b = 5;

// Suma
$resultado = $a + $b; // $resultado es 15
echo "El resultado de $a + $b es = $resultado"; 
echo '<br>';

// Resta
$resultado = $a - $b; // $resultado es 5
echo "El resultado de $a - $b es = $resultado";
echo '<br>';

// Multiplicación
$resultado = $a * $b; // $resultado es 50
echo "El resultado de $a * $b es = $resultado";
echo '<br>';

// División
$resultado = $a / $b; // $resultado es 2
echo "El resultado de $a / $b es = $resultado";
echo '<br>';

// Módulo
$resultado = $a % $b; // $resultado es 0
echo "El resultado de $a Módulo $b es = $resultado";
echo '<br>';

// Incremento $a es ahora 11
echo "El resultado de incrementar ".$a++." en uno es = ".$a;
echo '<br>';

// Decremento $b es ahora 4
echo "El resultado de decrementar ".$b--." en uno es = $b";
echo '<br>';

// Potenciación
$resultado = $a ** $b; // $resultado es 14641
echo "El resultado de $a**$b es = $resultado";
echo '<br>';
*/

/* ---Operadores de asignación---
Asignación simple: =
Asignación con suma: +=
Asignación con resta: -=
Asignación con multiplicación: *=
Asignación con división: /=
Asignación con módulo: %=


$x = 10; // Asignación simple
echo $x; //Imprime 10
echo '<br>';

// Asignación con suma
$x += 5; // Equivalente a: $x = $x + 5;
echo $x; // Imprime 15
echo '<br>';
// Asignación con resta
$x -= 3; // Equivalente a: $x = $x - 3;
echo $x; // Imprime 12
echo '<br>';

// Asignación con multiplicación
$x *= 2; // Equivalente a: $x = $x * 2;
echo $x; // Imprime 24
echo '<br>';

// Asignación con división
$x /= 4; // Equivalente a: $x = $x / 4;
echo $x; // Imprime 6
echo '<br>';

// Asignación con módulo
$x %= 3; // Equivalente a: $x = $x % 3;
echo $x; // Imprime 0
echo '<br>';
*/

/* ---Operadores de asignación de texto---
Concatenación simple: .=
*/
$mensaje = "Hola ";
$mensaje .= "mundo!";
echo $mensaje; // Esto imprimirá "Hola mundo!"
