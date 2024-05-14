<?php
/* 
// Ejemplo de clase
$pais = "Argentina";
$pais2 = $pais; // Asignación por valor
$pais = "Brasil"; 
$pais3 = &$pais; // Asignación por referencia 

echo '<br>pais  --->>>'.$pais; // Imprime Brasil
echo '<br>pais2 --->>>'.$pais2; // Imprime Argentina
echo '<br>pais3 --->>>'.$pais3; // Imprime Brasil



// Asignación por valor
$original = 10;
$copia = $original;

$original = 20; // Cambiamos el valor de la variable original

echo $copia; // Esto imprimirá 10, ya que $copia tiene el valor original de $original
*/

// Asignación por referencia
$original = 10;
$referencia = &$original;

$original = 20; // Cambiamos el valor de la variable original

echo $referencia; // Esto imprimirá 20, ya que $referencia apunta a la misma ubicación de memoria que $original
