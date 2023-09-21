<?php

//Laboratorio 7.1: Creación y uso de constantes en una clase

include("class_lib.php");
echo MiClase::constante . "<br>";
$clase = new MiClase();
$clase->mostrarConstante();
?>
