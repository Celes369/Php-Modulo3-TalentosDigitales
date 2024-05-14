<?php
/*
// Estructura básica de la función hash
string hash ( string $algo , string $data [, bool $raw_output = FALSE ] );


// Generar un hash SHA-256 de una cadena
$mensaje = "Hola Mundo";
$hash_sha256 = hash("sha256", $mensaje);

echo "Hash SHA-256 de '$mensaje': $hash_sha256 <br>";

// Generar el hash SHA-1
$hash_sha1 = hash("sha1", $mensaje);

// Imprimir el resultado
echo "Hash SHA-1 de '$mensaje': $hash_sha1 <br>";

// Generar un hash MD5 de una cadena
$hash_md5 = hash("md5", $mensaje);
echo "Hash MD5 de '$mensaje': $hash_md5 <br>";

// Proporciona un listado de todos los algoritmos de encriptaión disponibles
foreach(hash_algos() as $key => $algoritmosDeEncriptación){
    echo $algoritmosDeEncriptación.'<br>';
}

// Hasheo de mensaje con todos los algoritmos de encriptación
$mensaje = "Hola Mundo";

foreach(hash_algos() as $key => $algoritmosDeEncriptación){
    echo $algoritmosDeEncriptación.' - '.hash($algoritmosDeEncriptación, $mensaje).'<br>';
}



// EStrutura de la función password_hash
string password_hash(string $password, int $algo[, array $options ]);



// Definir la contraseña
$password = "mi_contraseña_secreta";

// Generar el hash de la contraseña utilizando el algoritmo bcrypt
$hash = password_hash($password, PASSWORD_BCRYPT);

// Imprimir el hash generado
echo "Hash de la contraseña $password con PASSWORD_BCRYPT: $hash";
echo '<br>';
// Generar el hash de la contraseña utilizando el algoritmo default
$hash = password_hash($password, PASSWORD_DEFAULT);

// Imprimir el hash generado
echo "Hash de la contraseña $password con PASSWORD_DEFAULT: $hash";

// Generar el hash de la contraseña utilizando el algoritmo bcrypt con un costo de 10
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

// Imprimir el hash generado
echo "Hash de la contraseña $password con PASSWORD_BCRYPT: $hash";
echo '<br>';
*/

//Estructura función password_verify()
//bool password_verify(string $password, string $hash);


/* Ejemplo de verificación de password */
$clave = 'Abc123'; // simula clave grabada por el usuario sin encriptar
// La clave que se guarda en la BD es $clave_hash, la encriptada 
$clave_hash = password_hash($clave, PASSWORD_BCRYPT, ['cost' => 10]);
$clave2 = 'Abc1233'; // Clave ingresada por el usuario para atenticar
// Se comparan la clave recien ingresada con la encriptada en la BD
if(password_verify($clave2, $clave_hash)){
    echo "Bienvenido a página de inicio!!!"; // Las claves coinciden
}else{
    echo "La clave ingresada es incorrecta, vuelve a intertarlo!"; // Las claves no coinciden
}