<?php
/*-----Ejemplos de definicion y acceso de constantes 
con la función define()-----
// Definición de constantes
define('PI', 3.14159);
define('NOMBRE', 'Celeste');

// Acceso a constantes
echo PI.'<br>'; // Imprime 3.14159
echo NOMBRE; // Imprime "Celeste" 
*/
/*-----Ejemplos de definicion y acceso de constantes 
utilizando const-----
const PI = 3.14159;
const NOMBRE = "Celeste";

echo PI.'<br>'; // Imprime 3.14159
echo NOMBRE; // Imprime "Celeste"

*/

// Definición de Arreglos con define()
define('ROLES', array('Administrador','Usuario', 'Cliente')); // Arreglo de 3 elementos de tipo string
define('MIXTO', array('Administrador', -7.5, true, 100)); // Arreglo de 4 elementos de diferntes tipos

// Acceso a los arreglos
echo ROLES[1]; // Permite acceder de manera individual a cada elemento (imprime "Usuario")
echo MIXTO[2]; // Imprime 1, el valor de true
var_dump(MIXTO); // Permite visualizar todos los elementos y los tipos de cada elemento 