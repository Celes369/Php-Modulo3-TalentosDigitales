<?php
// Ejemplos de definicion de variables en PHP
$nombre = "Celeste";
$edad = 36;
$precio_producto = 1999.99;
/*---Usamos lo aprendido para visualizar en el navegador los valores de 
las variables $nombre, $edad y $precio_producto con saltos de línea---*/
//echo $nombre. '<br>' .$edad. '<br>' .$precio_producto;


// Ejemplos de tipos de datos 
$cadena = "Hola, mundo"; // Tipo de dato: string
$numero = 42; // Tipo de dato: integer
$decimal = 3.14; // Tipo de dato: float
$booleano = true; // Tipo de dato: boolean
//echo $cadena.'<br>' .$numero. '<br>' .$decimal. '<br>' .$booleano;

/*-----Ejemplos case sensitive -----*/
$salario = 100;
$Salario = 200;

echo "Mi sueldo es: (salario) ".$salario.' '." (Salario) ".$Salario; 

/*-----Ejemplos de convención CamelCase-----*/
//  Ejemplo UpperCamelCase
$IdentificacionDeUsuario = 1;
echo $IdentificacionDeUsuario.'<br>';

// Ejemplo lowerCamelCase
$identificacionDeUsuario = 4;
echo $identificacionDeUsuario;


