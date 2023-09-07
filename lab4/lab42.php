<html>
<head>
 <title> Laboratorio 4.2</title>
</head>
<body>  
<?php
$valor1 = $_POST[ 'valor1'];

function obtieneFactorial($valor1){ 
    $valorfactorial = 1; 
    for ($i = 1; $i <= $valor1; $i++){ 
      $valorfactorial = $valorfactorial * $i; 
    } 
    return $valorfactorial;
}

$resultado = obtieneFactorial($valor1); 

echo "<br/> ¡Se calculo el favor factorial exitosamente! <br/>";
echo "<br/> El valor digitado fue: ". $valor1. " <br/>";
echo "<br/> El valor factorial es: ". $resultado. " <br/> <br/>";
?>
<button onclick="history.back()">Regresar</button>
</body>
</html>