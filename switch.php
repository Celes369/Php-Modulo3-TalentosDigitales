<?php
/* Switch 
-> Estructura

switch (expresion) {
    case valor1:
        Bloque de código si expresion es igual a valor1
        break;
    case valor2:
        Bloque de código si expresion es igual a valor2
        break;
        Puedes tener más casos aquí
    default: // Esta parte es opcional
        Bloque de código si no coincide ningún caso
}



// Ejemplo 1 Switch
$sexo = 'm';

switch ($sexo) {
    case 'm':
        echo "Sexo masculino"; // Imprime esta línea
        break;

       default:
        echo "Sexo femenino";
        break;
}

// Ejemplo 2 Switch
$sexo = 'f';
// 
switch ($sexo) {
    case 'm':
        echo "Sexo masculino"; 
        break;
        case 'f':
            echo "Sexo femenino"; 
            break;
}


// Ejemplo 3 Switch 
$sexo = 'i';
// Agregando el sexo indefinido por default
switch ($sexo) {
    case 'm':
        echo "Sexo masculino"; 
        break;
        case 'f':
            echo "Sexo femenino";
            break;
       default:
        echo "Sexo indefinido"; // Imprime esta línea
        break;
}
*/
// Ejemplo 3 Switch 
$sexo = 'i';
// Agregando el sexo indefinido como tercer opción 'i'
switch ($sexo) {
    case 'm':
        echo "Sexo masculino"; 
        break;
        case 'f':
            echo "Sexo femenino";
            break;
       case 'i':
        echo "Sexo indefinido"; // Imprime esta línea
        break;
}
