<?php

//Laboratorio 7.4: Auto carga de clases (no incluidas en tiempo de diseño)

spl_autoload_register(function ($nombre_clase) {
 $archivo = "clases/". $nombre_clase .".php";
if(file_exists($archivo)) include_once($archivo);
});
$obj = new miclase();
$obj2 = new miotraclase();
?>