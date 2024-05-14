<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Documentos</title>
</head>
<body>
    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
        <label for=" ">Agregar Archivo</label>
        <br>
        <input type="file" name="fileInput" accept=".jpg, .jpeg">
        <br>
        <br>
        <button type="submit">Enviar</button>
        <br>
        <br>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>