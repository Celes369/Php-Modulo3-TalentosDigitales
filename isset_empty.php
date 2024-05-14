<?php
/* 
// Función is_null() estructura
//bool is_null( mixed $var);

// Ejemplo is_null()
$variable1 = null;
$variable2 = "Hola";

if (is_null($variable1)) {
    echo "La variable1 es nula.<br>"; // imprime esta línea
} else {
    echo "La variable1 no es nula.Su valor es: $variable1<br>";
}

if (is_null($variable2)) {
    echo "La variable2 es nula.";
} else {
    echo "La variable2 no es nula. Su valor es: $variable2"; // imprime esta línea
}

// Funcion isset() estructura
//bool isset (mixed $var[, mixed $... ]);
// Ejemplo isset()
$variable1 = null;
$variable2 = "Hola";

if (isset($variable1)) {
    echo "La variable1 está definiday su valor es $variable1 <br>";
} else {
    echo "La variable1 no está definida o es nula.<br>"; // Imprime esta línea
}

if (isset($variable2)) {
    echo "La variable2 está definida y su valor es $variable2 <br>"; // Imprime esta línea
} else {
    echo "La variable2 no está definida o es nula.<br>";
}

// Verificar múltiples variables todas tienen que estar definidas para que devuelva true
$var1 = 10;
$var2 = null;
$var3 = 'Cleleste';

if (isset($var1, $var2)) {
    echo "Ambas variables están definidas y no son nulas.<br>";
} else {
    echo "Al menos una de las variables no está definida o es nula.<br>"; // Imprime esta línea
}

if (isset($var1, $var3)) {
    echo "Ambas variables están definidas y no son nulas. Sus valores son para var1: $var1 , para var3: $var3<br>"; // Imprime esta línea
} else {
    echo "Al menos una de las variables no está definida o es nula.<br>"; 
}

// Función unset() estructura
//void unset(mixed $var [, mixed $... ]);
// Ejemplo de unset()
$variable1 = "Hola";
$variable2 = "Mundo";

// Mostrar el contenido de las variables antes de unset
echo "Antes de unset():<br>";
echo "variable1: $variable1<br>";
echo "variable2: $variable2<br>";

// Eliminar una variable
unset($variable1);

// Mostrar el contenido de las variables después de unset
echo "<br>Después de unset():<br>";
echo "variable1: " . (isset($variable1) ? $variable1 : "No definida") . "<br>"; // Se imprime "No definida" porque la variable fue eliminada
echo "variable2: $variable2<br>";
*/
// Función empty() estructura
//bool empty(mixed $var);
$cadena = "Hola";
$cadena_vacia = "";
$numero_vacio = 0;

// Verificar si las variables están vacías
if (empty($cadena)) {
    echo "La cadena está vacía.<br>";
} else {
    echo "La variable cadena no está vacía.<br>";
}

if (empty($cadena_vacia)) {
    echo "La variable cadena_vacia está vacía.<br>";
} else {
    echo "La variable cadena_vacia no está vacía.<br>";
}

if (empty($numero_vacio)) {
    echo "La variable numero_vacio está vacía.<br>";
} else {
    echo "La variable numero_vacio no está vacía.<br>";
}

// Verificar una variable no definida
if (empty($variable3)) {
    echo "La variable3 no está definida o está vacía.";
} else {
    echo "La variable3 está definida y no está vacía.";
}



