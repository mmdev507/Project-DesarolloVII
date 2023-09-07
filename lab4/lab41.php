<html>
<head>
 <title> Laboratorio 4.1</title>
</head>
<body>  
<?php

if (array_key_exists('enviar', $_POST)){ 
    if ($_REQUEST['Valorventa'] >= 80)
    { 
        echo '<td><img src="/desarollo%20VII/Project-DesarolloVII/lab4/img/verde.jpg"><br/>';
        echo "El resultado de venta digitado fue: $_REQUEST[Valorventa] %";
    }
   else if ($_REQUEST['Valorventa'] >=50 and $_REQUEST['Valorventa'] <80)
    { 
        echo '<td><img src="/desarollo%20VII/Project-DesarolloVII/lab4/img/amarillo.jpg"><br/>';
        echo "El resultado de venta digitado fue: $_REQUEST[Valorventa] %";
    }
     else
     { 
        echo '<td><img src="/desarollo%20VII/Project-DesarolloVII/lab4/img/rojo.jpg"><br/>';
        echo "El resultado de venta digitado fue: $_REQUEST[Valorventa] %" ;
     }
    echo "<BR><BR>";
}
?>
<button onclick="history.back()">Regresar</button>
</body>
</html>