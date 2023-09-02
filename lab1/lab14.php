<html>
<head>
 <title> Laboratorio 1.4 </title>
</head>
<body>
<?php
//Laboratorio 1.4: Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100
//<>
//</>
//{ 
//}
echo "<table border=1>"; 
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
    echo "<tr>";
    for ($n2=1; $n2<=10; $n2++)
    {
    echo "<td>", $n, "</td>";
    $n=$n+1;
    } 
    echo "</tr>";
}
 echo "</table>";
?>
</body>
</html>