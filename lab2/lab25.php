<html>
<head>
 <title> Laboratorio 2.5</title>
</head>
<body>  
<?php
//Laboratorio 2.5: Editar elementos de un arreglo y uso de funciones
$figuras = array ('cuadrado', 'triangulo', 'circulo',);
$figuras[1] = 'rectángulo';
mostrar_figuras($figuras, "asignacion de rectangulo");

array_push($figuras, 'pentagono');
mostrar_figuras($figuras, "adicion de pentagono al final");

array_unshift($figuras, 'hexagono');
mostrar_figuras($figuras, "adicion de hexagono al inicio");

array_pop($figuras);
mostrar_figuras($figuras, 'eliminacion del ultimo');

array_shift($figuras);
mostrar_figuras($figuras, 'eliminacion del primero');

function mostrar_figuras($figuras, $mensaje){
    echo "<br>Arreglo despues de $mensaje <br>";
    foreach ($figuras as $figura){ 
     echo "$figura <br>"; 
}
}
?>
</body>
</html>