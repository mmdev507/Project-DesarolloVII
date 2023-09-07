<html>
<head>
 <title> Laboratorio 3.3</title>
</head>
<body>  
<?php

if (array_key_exists('enviar', $_POST)){ 
    if ($_REQUEST['Apellido'] != "")
    { 
        echo "El apellido ingresado es : $_REQUEST[Apellido]";
    }
    else 
    { 
        echo "Favor coloque el apellido";
    }
    echo "<BR>";

    if ($_REQUEST['Nombre'] != "")
    { 
        echo "El nombre ingresado es : $_REQUEST[Nombre]";
    }
    else { 
        echo "Favor coloque el nonbre";
    }
}
else { 
?>
  <FORM ACTION = "lab33.php" METHOD ="POST">
  Nombre: <INPUT TYPE="TEXT" NAME="Nombre"><br>
  Apellido: <INPUT TYPE="TEXT" NAME="Apellido"><br>
  <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="Enviar datos">
  </FORM>
  
 <?php
}
?>
</body>
</html>