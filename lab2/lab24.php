<html>
<head>
 <title> Laboratorio 2.4</title>
</head>
<body>  
<?php
//Laboratorio 2.4: Crear una aplicación con arreglos asociativos (claves) y recorrer con for each
//Creacion del arreglo array("clave" => "valor")
$personas = array("Juan" => "Panamá", 
"Jhon" => "USA", 
"eica" => "Finlandia", 
"Kusanagi" => "Japón");

//Recorrer todo el arreglo 
foreach($personas as $persona => $pais){ 
  print "$persona es de $pais<br>";
}

//Impresion especifica 
echo "<br>".$personas["Juan"];
echo "<br>".$personas["eica"];

?>
</body>
</html>