<?php
echo $_FILES['fileInput']['name'].'<br>'; // Imprime el nombre original del archivo que se está subiendo.
echo $_FILES['fileInput']['tmp_name'].'<br>'; // Imprime la ruta temporal del archivo en el servidor.
echo $_FILES['fileInput']['type'].'<br>'; //  Imprime el tipo MIME del archivo.
echo $_FILES['fileInput']['error'].'<br>'; // Imprime el código de error, si lo hubiera, relacionado con la subida del archivo.
echo $_FILES['fileInput']['size'].'<br>'; // Imprime el tamaño del archivo en bytes.


if (!file_exists('files')){
    echo "No existe la carpeta files";
    if (!mkdir('files', 0777)) {
        // Si no puede imprime mensaje que no puede hacerlo
        echo "Error: No puedo crear la carpeta files";
    }
}

chmod('files', 0777);

if (move_uploaded_file($_FILES['fileInput']['tmp_name'], 'files/'.$_FILES['fileInput']['name'])) {
    echo "El Archibo se subió Correctamente";
}else{
    echo "Error: No se pudo subir el archivo";
}



// Restringir desde backend el tamaño de archivo que se recibe
if (($_FILES['fileInput']['size']/1024)> 2048){
    echo "Archivo muy grande";
    exit();
}
// Restringir desde backend el tipo de archivo que se recibe
if (mime_content_type($_FILES['fileInput']['tmp_name']) == 'application/pdf') {
    echo "Archivo No Aceptado";
    exit();
}

/* 
if(is_null($nombre)){
echo "El nombre es nulo";
}else{
    echo "Continuar ejecución";
}
*/