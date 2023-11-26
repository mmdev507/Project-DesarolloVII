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
    <H2>Paso 2: la variable ya ha sido destruida y su valor se ha perdido</H2>
    <?php

    if(isset($_SESSION['var']))
    {
        $var = $_SESSION['var'];
        
    }else{
        $var = "";
    }
    print ("<P>Valor de la variable de sesión: $var</P>\n");
    session_destroy ();
?>    
<A HREF='lab121.php'>Volver al paso 1</A>;

</BODY>
</HTML>
