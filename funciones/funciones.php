<?php 
/* Ejemplo de cómo definir funciones en php 
// Ejemplo 1 una función que imprime un saludo simple(dado en clases)
function saludo(){
    echo "Hello";
}

// Ejemplo 2 una función que imprime un saludo personalizado con un nombre
function saludar($nombre) {
    echo "¡Hola, $nombre!";
}

// Ejemplo 3 una función que suma dos números y devuelve el resultado
function sumar($num1, $num2) {
    return $num1 + $num2;
}

// Definir una función que verifica si un número es par
function esPar($numero) {
    return $numero % 2 == 0;
}
*/

/* LLamar a una función php 
// Llamar a la función saludo
saludo();// imprimirá Hello
echo('<br>');

// Llamar a la función saludar
saludar("Juan"); // Imprimirá: ¡Hola, Juan!
echo('<br>');

// Llamar a la función sumar
$resultado = sumar(5, 3); // $resultado contendrá 8
echo $resultado;
echo('<br>');

// Llamar a la función esPar
if (esPar(4)) {
    echo "El número es par";
} else {
    echo "El número es impar";
}
echo('<br>');
echo('<br>');



// Siguiendo con el ejemplo de las tablas de multiplicar sin parametro
function tablasMultiplicar(){
$multiplicando = 7;
$tope = 10;

echo "Tabla de multiplicar del $multiplicando :<br>";

for ($multiplicador = 0; $multiplicador <= $tope;  $multiplicador++){
    $producto = $multiplicando * $multiplicador;
    echo "$multiplicando x $multiplicador = $producto<br>";
}
}
// Llamada de la función tablasMultiplicar()
tablasMultiplicar(); // imprime la tabla del 7 desde el cero hasta el 10

// Siguiendo con el ejemplo de las tablas de multiplicar con parametro multiplicando
function tablasMultiplicar2($multiplicando){

    $tope = 10;
    
    echo "Tabla de multiplicar del $multiplicando :<br>";
    
    for ($multiplicador = 0; $multiplicador <= $tope;  $multiplicador++){
        $producto = $multiplicando * $multiplicador;
        echo "$multiplicando x $multiplicador = $producto<br>";
    }
    }
// Llamada de la función tablasMultiplicar2($multiplicando)    
tablasMultiplicar2(3); // imprime tabla del 3 desde 0 hasta 10

// Siguiendo con el ejemplo de las tablas de multiplicar con parametro multiplicando y tope
function tablasMultiplicar3($multiplicando, $tope){
    
    echo "Tabla de multiplicar del $multiplicando :<br>";
    
    for ($multiplicador = 0; $multiplicador <= $tope;  $multiplicador++){
        $producto = $multiplicando * $multiplicador;
        echo "$multiplicando x $multiplicador = $producto<br>";
    }
    }
// Llamada de la función tablasMultiplicar2($multiplicando, $tope) 
tablasMultiplicar3(3, 5); // Imprime tabla del 3 desde el cero hasta 5
*/

/* Definir Funciones con retornos 
// Definir una función que retorne un string como saludo
function saludo2(){
    return "Hello";
}

// Definir una función que sume dos números y retorne el resultado
function sumar2($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

// Definir una función que calcule el área de un círculo y retorne el resultado
function calcularAreaCirculo($radio) {
    $area = pi() * $radio * $radio;
    return $area;
}

// Llamado de las funciones
// forma hacer uso de la función saludo2
echo saludo2(); // Directamente que imprima el valor que retorna
echo('<br>');
$saludo = saludo(); // Asignando primero el valor de retorno a alguna variable
echo $saludo; // para despues imprimirla 
echo('<br>');
// Llamar a la función sumar
$suma = sumar(5, 3); // $suma contendrá 8
// Llamar a la función calcularAreaCirculo
$radio = 5;
$areaCirculo = calcularAreaCirculo($radio); // $areaCirculo contendrá el área del círculo con radio 5
echo "La suma es: $suma <br>";
echo "El área del círculo con radio $radio es: $areaCirculo <br>";
*/


/* Funciones con paso de parámetro por valor y referencia 
// Paso de parámetro por valor

// Definir una función que modifica el valor de un parámetro
function duplicar($numero) {
    $numero *= 2; // La variable $numero se duplica dentro de la función
    return $numero;
}

$valor = 5;
$nuevo_valor = duplicar($valor); // $valor no es modificado
echo "Valor original: $valor <br>"; // Imprimirá: Valor original: 5
echo "Nuevo valor: $nuevo_valor <br>"; // Imprimirá: Nuevo valor: 10
echo "Valor original: $valor <br>"; // Imprimirá: nuevamente el valor original: 5 

// Paso de parámetro por referencia
// Definir una función que modifica el valor de un parámetro por referencia
function triplicar_referencia(&$numero) {
    $numero *= 3; // El valor de la variable original se duplica dentro de la función
    return $numero;
}

$valor = 5;
echo "Valor original: $valor <br>"; // Imprimirá: Valor original: 5
$valor_triplicado = triplicar_referencia($valor); // $valor es modificado por referencia
echo "Nuevo valor: $valor_triplicado <br>"; // Imprimirá: Nuevo valor: 15
echo "Valor original: $valor <br>"; // Imprimirá: Valor original modificado: 15
*/

/* Funciones aplicadas a string  
$nombre = "Celeste Sandoval";
echo $nombre.'<br>'; // Imprime $nombre con el valor tal cual le fue asignado
$nombre = strtoupper($nombre); // Transforma $nombre a todo Mayusculas
echo $nombre.'<br>';
$nombre = strtolower($nombre); // Transforma $nombre a todo minusculas
echo $nombre.'<br>';
$nombre = ucfirst($nombre); // Transforma $nombre con la primer letra en Mayuscula 
echo $nombre.'<br>';
$cuenta_palabras = str_word_count($nombre); // Devuelve la cantidad de palabras que contiene la cadena
echo $cuenta_palabras.'<br>';
 // Separa la cadena en subcadenas despues de detectar un espacio y los guarda en un array
$array_cadena = explode(' ', $nombre);
var_dump($array_cadena);
echo('<br>');
// De igual manera podemos separar por cualquier otro delimitador
$array_cadena = explode('e', $nombre);
var_dump($array_cadena); // Lo divide como C l st sandoval
echo('<br>');
//otro parámetro que maneja explode() es la cantidad de cadenas en las que queremos dividir
$array_cadena = explode('e', $nombre, 2); // Divide en 2 luego de la primer e
var_dump($array_cadena); // Lo divide como C leste sandoval
*/

