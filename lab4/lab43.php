<html>
<head>
 <title> Laboratorio 4.3</title>
</head>
<body>  
<?php
// Array que contiene valores iniciales
$array = [32,34,52,54,45,43,34,26,36,65,68,63,60,61,72,73,12,43,32,24,53];
print_r($array);
$valormaximo = max($array);

$posicion = array_search($valormaximo, $array);

echo "<br/><br/><br/>El valor maximo guardado es: ", $valormaximo;
echo "<br/>y está en la posición: ", $posicion;
?>
</body>
</html