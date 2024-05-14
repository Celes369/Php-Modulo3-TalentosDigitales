<?php
/*---Operadores de Comparación
1.Igualdad: ==
2.Identidad (igualdad estricta): ===
3.Diferencia: != o <>
4.Diferencia (estricta): !==
5.Mayor que: >
6.Menor que: <
7.Mayor o igual que: >=
8.Menor o igual que: <= 


$numero1 = 10;
$numero2 = 10;

// Ejemplo1 Igualdad: Imprime 1 correspondiente al valor true (verdadero)
echo $numero1 == $numero2;

// Para ver el resultado como valor booleano true
var_dump($numero1 == $numero2);


$numero1 = 10;
$numero2 = 11;

// Ejemplo2 Igualdad: no imprime valor alguno ya que es falso
echo $numero1 == $numero2;
// Aun cuando no hay valor, el resultado de la comparación está allí
echo "Recordemos! False no tiene un valor representativo, pero aquí está -->".($numero1 == $numero2);
echo '<br>';
// Para ver el resultado como valor booleano false
var_dump($numero1 == $numero2);

$numero1 = 10;
$numero2 = '10';

// Ejemplo3 Igualdad: Imprime 1 correspondiente al valor true (verdadero)
echo $numero1 == $numero2;
echo '<br>'; // imprime un salto de línea
// Para ver el resultado como valor booleano true
var_dump($numero1 == $numero2);


// Ejemplo igualdad estricta 1
$numero1 = 10;
$numero2 = '10';

var_dump($numero1 === $numero2); // Imprime false 


$a = 5;
$b = 10;

// Igualdad
if ($a == $b) {
    echo "$a es igual a $b";
} else {
    echo "$a no es igual a $b";
}
echo '<br>';
// Identidad (igualdad estricta)
if ($a === $b) {
    echo "$a es identico a $b";
} else {
    echo "$a no es identico a $b";
}
echo '<br>';
// Diferencia
if ($a != $b) {
    echo "$a no es igual a $b";
} else {
    echo "$a es igual a $b";
}
echo '<br>';
// Diferencia (estricta)
if ($a !== $b) {
    echo "$a no es identico a $b";
} else {
    echo "$a es identico a $b";
}
echo '<br>';
// Mayor que
if ($a > $b) {
    echo "$a es mayor que $b";
} else {
    echo "$a no es mayor que $b";
}
echo '<br>';
// Menor que
if ($a < $b) {
    echo "$a es menor que $b";
} else {
    echo "$a no es menor que $b";
}
echo '<br>';
// Mayor o igual que
if ($a >= $b) {
    echo "$a es mayor o igual que $b";
} else {
    echo "$a no es mayor o igual que $b";
}
echo '<br>';
// Menor o igual que
if ($a <= $b) {
    echo "$a es menor o igual que $b";
} else {
    echo "$a no es menor o igual que $b";
}



// Ejemplo 4 diferencia  
$numero1 = 10;
$numero2 = 11;
// Utilizando <>
var_dump($numero1 <> $numero2); // Imprime true 
echo '<br>';
// O bien utilizando !=
var_dump($numero1 != $numero2); // Imprime true 

// Ejemplo 1 mayor que >  
$numero1 = 10;
$numero2 = 11;
// Utilizando <>
var_dump($numero1 > $numero2); // Imprime false

// Ejemplo 2 mayor que >  
$numero1 = 10;
$numero2 = '11';
var_dump($numero1 > $numero2); // Imprime false

// Ejemplo 3 mayor que >  
$numero1 = 10;
$numero2 = '1';
var_dump($numero1 > $numero2); // Imprime true

// Ejemplo 4 mayor que >  
$numero1 = 10;
$numero2 = 1;
var_dump($numero1 > $numero2); // Imprime true


// Ejemplo 1 menor que >  
$numero1 = 10;
$numero2 = 10;
// Utilizando solo menor que <
var_dump($numero1 < $numero2); // Imprime false
echo '<br>';
// Utilizando menor o igual que <= 
var_dump($numero1 <= $numero2); // Imprime true

// Ejemplo 1 diferencia estricta !==
$numero1 = 10;
$numero2 = 11;

var_dump($numero1 !== $numero2); // Imprime true 
echo '<br>';

// Ejemplo 2 diferencia estricta !==
$numero1 = 10;
$numero2 = 10;
var_dump($numero1 !== $numero2); // Imprime false 
echo '<br>';

// Ejemplo 3 diferencia estricta !==
$numero1 = 10;
$numero2 = '10';
var_dump($numero1 !== $numero2); // Imprime true 
echo '<br>';

// Ejemplo 4 diferencia estricta !==
$numero1 = 10;
$numero2 = '11';
var_dump($numero1 !== $numero2); // Imprime true 
echo '<br>';
*/

/*--- Operadores lógicos
1.AND &&
2.OR || 
3.NOT !
4.XOR


// Ejemplo 1 AND &&
$a = 5;
$b = 10;
$c = 15;

// 5 es menor que 10 y 10 menor que 15 (verdadero y verdadero) = Verdadero
if ($a < $b && $b < $c) { 
    echo "La expresión es verdadera."; // Imprime esta línea
} else {
    echo "La expresión es falsa.";
}
echo '<br>';

// Ejemplo 2 AND &&
$a = 5;
$b = 10;
$c = 15;
// 10 es menor que 5 y 10 es menor que 15 (falso y verdadero) = falso
if ($b < $a && $b < $c) { 
    echo "La expresión es verdadera."; 
} else {
    echo "La expresión es falsa.";// Imprime esta línea
}
echo '<br>';

// Ejemplo 3 AND &&
$a = 5;
$b = 10;
$c = 15;
// 5 es menor que 10 y 15 es menor que 10 (verdadero y falso) = falso
if ($a < $b && $c < $b) { 
    echo "La expresión es verdadera."; 
} else {
    echo "La expresión es falsa.";// Imprime esta línea
}
echo '<br>';


// Ejemplo 4 AND &&
$a = 5;
$b = 10;
$c = 15;
// 5 es mayor que 10 y 10 es mayor que 15 (falso y falso) = falso
if ($a > $b && $b > $c) { 
    echo "La expresión es verdadera."; 
} else {
    echo "La expresión es falsa."; // Imprime esta línea
}
echo '<br>';

// Ejemplo 1 OR (||)
$a = 5;
$b = 10;
$c = 15;
// 5 es menor que 10 o 5 es mayor que 15 (verdadero o falso) = verdadero
if ($a < $b || $a > $c) { 
    echo "La expresión es verdadera.";// Imprime esta línea
} else {
    echo "La expresión es falsa.";
}
echo '<br>';

// Ejemplo 2 OR (||)
$a = 5;
$b = 10;
$c = 15;
// 5 es mayor que 10 o 5 es menor que 15 (falso o verdadero) = verdadero
if ($a > $b || $a < $c) { 
    echo "La expresión es verdadera.";// Imprime esta línea
} else {
    echo "La expresión es falsa.";
}
echo '<br>';

// Ejemplo 3 OR (||)
$a = 5;
$b = 10;
$c = 15;
// 5 es menor que 10 o 5 es menor que 15 (verdadero o verdadero) = verdadero
if ($a < $b || $a < $c) { 
    echo "La expresión es verdadera.";// Imprime esta línea
} else {
    echo "La expresión es falsa.";
}
echo '<br>';

// Ejemplo 4 OR (||)
$a = 5;
$b = 10;
$c = 15;
// 5 es mayor que 10 o 5 es mayor que 15 (falso o falso) = falso
if ($a > $b || $a > $c) { 
    echo "La expresión es verdadera."; 
} else {
    echo "La expresión es falsa."; // Imprime esta línea
}
echo '<br>';

// Ejemplo 1 NOT (!)
$a = 5;
$b = 10;

// 5 No es igual que 10 (verdadero)
if (!($a == $b)) {
    echo "La expresión es verdadera."; // Imprime esta línea
} else {
    echo "La expresión es falsa.";
}
echo '<br>';

// Ejemplo 2 NOT (!)
$a = 5;
$b = 5;

// 5 No es igual que 5 (falso)
if (!($a == $b)) {
    echo "La expresión es verdadera."; 
} else {
    echo "La expresión es falsa."; // Imprime esta línea
}
echo '<br>';
*/
// Ejemplo 1 XOR
$a = 5;
$b = 10;
$c = 15;
// 5 es menor que 10 o exclusivo 5 es menor que 15 (verdadero Xor verdadero) = falso
if (($a < $b) xor ($a < $c)) {
    echo "La expresión es verdadera.";
} else {
    echo "La expresión es falsa."; // Imprime esta línea
}
echo '<br>';

// Ejemplo 2 XOR
$a = 5;
$b = 10;
$c = 15;
// 5 es mayor que 10 o exclusivo 5 es mayor que 15 (falso Xor falso) = falso
if (($a > $b) xor ($a > $c)) {
    echo "La expresión es verdadera.";
} else {
    echo "La expresión es falsa."; // Imprime esta línea
}
echo '<br>';


// Ejemplo 3 XOR
$a = 5;
$b = 10;
$c = 15;
// 5 es menor que 10 o exclusivo 5 es mayor que 15 (verdadero Xor falso) = Verdadero
if (($a < $b) xor ($a > $c)) {
    echo "La expresión es verdadera."; // Imprime esta línea
} else {
    echo "La expresión es falsa."; 
}
echo '<br>';

// Ejemplo 4 XOR
$a = 5;
$b = 10;
$c = 15;
// 5 es mayor que 10 o exclusivo 5 es menor que 15 (verdadero Xor falso) = Verdadero
if (($a > $b) xor ($a < $c)) {
    echo "La expresión es verdadera."; // Imprime esta línea
} else {
    echo "La expresión es falsa."; 
}
echo '<br>';
