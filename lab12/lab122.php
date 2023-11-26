<?php
session_start ();
?>
<HTML XMLS="http://w3.org/1999/xhtml" xml:lang="es" LANG="ES">
<HEAD>
    <TITLE>Laboratorio 12</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1>Manejo de Sesiones</H1>
    <H2>Paso 2: Se accede variable de sesion almacenada y se destruye</H2>
    <?php

    if(isset($_SESSION['var']))
    {
        $var = $_SESSION['var'];
        print ("<P>Valor de la variable de sesion: $var </P>\n");
        unset  ($_SESSION['var']);
        print ("<A HREF='lab123.php'>Paso 3 </A>");
    }else{
        print ("Sesion no iniciada, ir a <A HREF='lab121.php'>Paso 1</A> para iniciar la sesion");
    }

?>    
</BODY>
</HTML>

