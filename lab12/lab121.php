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
    <H2>Paso 1: Se crea la variable de sesion y se almacena</H2>
    <?php
$var = "Ejemplo Sesiones";
$_SESSION['var'] = $var;

print (" <P>Valor de la variable de sesion: $var </P>\n");
?>    
<A HREF="lab122.php">Paso 2 </A>
</BODY>
</HTML>

