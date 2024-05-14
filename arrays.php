<?php
/*
// Crear un array indexado
$miArray = array("Manzana", "Banana", "Cereza");

// Acceder a elementos del array
echo $miArray[0]; // Muestra: Manzana
echo $miArray[1]; // Muestra: Banana
echo $miArray[2]; // Muestra: Cereza

// Crear un array asociativo
$miArrayAsociativo = array("fruta1" => "Manzana", "fruta2" => "Banana", "fruta3" => "Cereza");

// Acceder a elementos del array asociativo
echo $miArrayAsociativo["fruta1"]; // Muestra: Manzana
echo $miArrayAsociativo["fruta2"]; // Muestra: Banana
echo $miArrayAsociativo["fruta3"]; // Muestra: Cereza


// Array escalar con elementos todos del tipo entero
$arrayEscalar = array(1, 2, 3, 4, 5);
var_dump($arrayEscalar);

// Array escalar con elementos todos del tipo entero
$arrayEscalar = [1, 2, 3, 4, 5];
var_dump($arrayEscalar);*/

// Array Escalar 
$personas = array("Maximiliano", "Lucia", "Juan", "Analía");
//Acceso a un elemento según la posición que queremos ver
// echo $personas[2]; // Muestra Juan
/* Muestra la cantidad de elementos del array, uno seguido del otro los elementos 
(indice posición, tipo de dato y valor, si es un string antes del valor muestra la
 cantidad de caracteres que lo componen) */
// var_dump($personas); // Muestra todos los elementos 
// // print_r($personas); // Muestra todos los elementos en una sola linea (posición y contenido)
/* Agregando echo() junto a las etiquetas pre y la instrucción print_r()
podemos mostrar todos los elementos con (indice y contenido en cada linea) 
echo('<pre>');
print_r($personas);
echo('</pre>');*/

/** Si quisieramos cambiar el valor de un elemento, sabiendo su posición dentro del array */
// echo('<br><br>'); // Agrega dos saltos de línea
// $personas[1] = "Celeste"; // Asigna el Valor Celeste al elemento de la posición 1 del array
// Para ver los cambios
// echo('<pre>');
// print_r($personas);
// echo('</pre>');

/* Ejemplo de la clase de hoy - array asociativo que contiene un array escalar 
// Crear array asociativo personas y dentro el array escalar Cursos
$personas = [
    'Nombre'    =>"Celeste",
    'Apellido'  => "Sandoval",
    'Cursos'    => ['PHP', 'Laravel', 'VUEJS']
]; 
// Imprimir array personas 
echo('<pre>');
print_r($personas);
echo('</pre>');

// Para cambiar o agregar algún elemento del arreglo Cursos
$personas['Cursos'][2] = 'JAVASCRIPT'; // Modifica el valor del tercer elemento por el valor JAVASCRIPT
$personas['Cursos'][3] = 'SQL'; // Agrega un cuarto elemento en la posición 3 con el valor SQL
// Imprimir array personas modificado 
echo('<pre>');
print_r($personas);
echo('</pre>');
*/
/* 
// Crear un array multidimensional
$matriz = array(
    array(1, 2, 3),
    array('a', 'b', 'c'),
    array(true, false, true)
);

// Acceder a elementos individuales
echo $matriz[0][1]; // Imprime 2
echo $matriz[1][2]; // Imprime 'c'
echo $matriz[2][0]; // Imprime 1

// Puedes también utilizar sintaxis más moderna para declarar arrays multidimensionales
$matriz_moderna = [
    [1, 2, 3],
    ['a', 'b', 'c'],
    [true, false, true]
];

// Imprimir la matriz moderna
echo('<pre>');
print_r($matriz_moderna);
echo('</pre>');
echo('<br>');
// También puedes añadir elementos a un array multidimensional
$matriz_moderna[] = ['x', 'y', 'z'];

// Imprimir la matriz actualizada
echo('<pre>');
print_r($matriz_moderna);
echo('</pre>');
*/

/*                            Funciones              */    
// Función contar - Cuenta los elementos de un arreglo
$personas = array("Celeste", "Maximiliano", "Lucia", "Analía");
// Imprimir array personas 
echo('<pre>');
print_r($personas);
echo('</pre>');
// Guarda la cantidad de elementos en la variable $cantidad
$cantidad = count($personas);
// Imprimprime una leyenda junto con el valor guardado en la variable $cantidad
echo 'Cantidad de elementos: '.$cantidad;
// Ordenamiento de elementos por valor en orden de menor a mayor
sort($personas);
// Imprimir array personas con elementos ordenados
echo('<pre>');
print_r($personas);
echo('</pre>');


// Ordenamiento de elementos por valor en orden de mayor a menor
rsort($personas);
// Imprimir array personas con elementos ordenados
echo('<pre>');
print_r($personas);
echo('</pre>');


/* 
// Definir un array
$miArray = array('a', 'b', 'c', 'd', 'e');

// Contar los elementos del array
$numeroElementos = count($miArray);

// Imprimir el resultado
echo 'El número de elementos en el array es: ' . $numeroElementos;
*/

