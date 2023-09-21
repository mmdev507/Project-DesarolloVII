<?php

//Laboratorio 7.6: Uso de formularios en orientación a objetos I


include('class_lib.php');
$diam = $_POST['diam'];
$altu = $_POST['altu'];
$cil = new Cilindro($diam,$altu);
$volumen=$cil->calc_volumen();
$area=$cil->calc_area();
echo "<br/> El volumen del cilindro es de ". $volumen . " metros cubicos";
echo "<br/> El area del cilindro es de ". $area . " metros cuadrados";
?>
