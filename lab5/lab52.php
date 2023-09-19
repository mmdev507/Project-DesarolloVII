<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
      // Aquí se debe colocar la ruta donde se guardarán los archivos
    $nombreDirectorio = "C:\\xampp\\tmp";
    $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombreArchivo;
    $tipoArchivo = $_FILES['nombre_archivo_cliente']['type'];
    $tamanioArchivo = $_FILES['nombre_archivo_cliente']['size'];

    // Validar el tipo de archivo permitido (jpg, jpeg, gif, png)
    $extensionesPermitidas = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
    $extensionArchivo = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

    if (!in_array($extensionArchivo, $extensionesPermitidas)) {
        echo "Tipo de archivo no permitido. Se permiten solo archivos JPG, JPEG, GIF y PNG.<br><br>";
        echo "No se ha podido subir el archivo <br>";
    }
    // Validar el tamaño del archivo (1MB)
    elseif ($tamanioArchivo > 1024 * 1024) {
        echo "El archivo es demasiado grande. Se permite un tamaño máximo de 1MB.<br><br>";
        echo "No se ha podido subir el archivo <br>";
    } elseif (is_file($nombreCompleto)) {
        $idUnico = time();
        $nombreArchivo = $idUnico . "-" . $nombreArchivo;
        echo "Archivo repetido, se cambió el nombre a $nombreArchivo<br><br>";
    }
    
    else{ 
        move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombreArchivo);

    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    }
    
}
?>
<button onclick="history.back()">Regresar</button>